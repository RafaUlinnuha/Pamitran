<?php

namespace App\Controllers;

use App\Models\ManageUserModel;
use App\Models\LayananPublikasiModel;

class Layanan extends BaseController
{
    protected $manageUserModel;
    protected $layananPublikasiModel;

    public function __construct()
    {
        helper(['form', 'url']);
        $this->session = session();
        $this->manageUserModel = new ManageUserModel();
        $this->layananPublikasiModel = new LayananPublikasiModel();
    }

    public function Endoskopi_Training_Center()
    {
        $data = [
            'title' => 'Endoskopi Training Center'
        ];
        return view('layanan/Endoskopi_Training_Center', $data);
    }

    public function Dental_Training_Center()
    {
        $data = [
            'title' => 'Dental Training Center'
        ];
        return view('layanan/Dental_Training_Center', $data);
    }

    public function OSCE_Training_Center()
    {
        $data = [
            'title' => 'OSCE Training Center'
        ];
        return view('layanan/OSCE_Training_Center', $data);
    }
    
    public function Pamitran_Publication_Services()
    {
        $data = [
            'title' => 'Pamitran_Publication_Services'
        ];
        return view('layanan/Pamitran_Publication_Services', $data);
    }

    public function Kerjasama_Penelitian()
    {
        $data = [
            'title' => 'Kerjasama Penelitian'
        ];
        return view('layanan/Kerjasama_Penelitian', $data);
    }


    public function Apotik_Pendidikan()
    {
        $data = [
            'title' => 'Apotik Pendidikan'
        ];
        return view('layanan/Apotik_Pendidikan', $data);
    }

    public function Puspa_Day_Care()
    {
        $data = [
            'title' => 'Puspa Day Care'
        ];
        return view('layanan/Puspa_Day_Care', $data);
    }

    public function Kemoterapi()
    {
        $data = [
            'title' => 'Kemoterapi'
        ];
        return view('layanan/Kemoterapi', $data);
    }

    public function Perawatan_Covid()
    {
        $data = [
            'title' => 'Perawatan Covid'
        ];
        return view('layanan/Perawatan_Covid', $data);
    }

    public function Palliative_Care()
    {
        $data = [
            'title' => 'Palliative Care'
        ];
        return view('layanan/Palliative_Care', $data);
    }
    
    public function Poliklinik_Infeksi()
    {
        $data = [
            'title' => 'Poliklinik Infeksi'
        ];
        return view('layanan/Poliklinik_Infeksi', $data);
    }

    public function Pojok_Lansia()
    {
        $data = [
            'title' => 'Pojok Lansia'
        ];
        return view('layanan/Pojok_Lansia', $data);
    }


    public function Cafe_dan_Restoran()
    {
        $data = [
            'title' => 'Cafe dan Restoran'
        ];
        return view('layanan/Cafe_dan_Restoran', $data);
    }

    public function ATM_Center()
    {
        $data = [
            'title' => 'ATM Center'
        ];
        return view('layanan/ATM_Center', $data);
    }

    public function Laboratorium()
    {
        $data = [
            'title' => 'Laboratorium'
        ];
        return view('layanan/Laboratorium', $data);
    }

    public function Conference_Rooms()
    {
        $data = [
            'title' => 'Conference Rooms'
        ];
        return view('layanan/Conference_Rooms', $data);
    }


    public function tambah_bukti_transfer()
    {
        $bukti_transfer = $this->request->getFile('bukti_transfer');
        $nama_bukti_transfer = $bukti_transfer->getRandomName();
        $bukti_transfer->move('assets/img/bukti_transfer/', $nama_bukti_transfer);
        return $nama_bukti_transfer;
    }

    public function tambah_paper()
    {
        $paper = $this->request->getFile('paper');
        $nama_paper = $paper->getRandomName();
        $paper->move('assets/uploads/', $nama_paper);
        return $nama_paper;
    }

    public function registrasi_layanan()
    {    

        if(!$this->session->isLoggedIn){
            $this->session->setFlashData('errors', 'Silakan login terlebih dahulu');
            return redirect()->to('/Pamitran_Publication_Services');
        }

        $data = [
            'title' => 'Registrasi Layanan',
            'user' => $this->manageUserModel->where('id', $this->session->id)->first()
        ];

        if ($this->request->getMethod() == 'post'){
            $rules = [
                'bukti_transfer' => 'uploaded[bukti_transfer]|mime_in[bukti_transfer,image/jpg,image/jpeg,image/png]',
                'paper' => 'uploaded[paper]|mime_in[paper,application/pdf,application/doc,application/docx]',
                'jenis_layanan' => 'required',
            ];
            $errors = [
                'bukti_transfer' => [
                    'uploaded' => 'File tidak valid',
                    'mime_in' => 'File tidak valid',
                ],
                'paper' => [
                    'uploaded' => 'File tidak valid',
                    'mime_in' => 'File tidak valid',
                ],
                'jenis_layanan' => [
                    'required' => 'Jenis layanan wajib diisi',
                ],
            ];
            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $id = $this->request->getVar('id');
                $old_jenis_layanan = $this->request->getVar('jenis_layanan');
                $jenis_layanan = implode("<br><br>", $old_jenis_layanan);
                $newDataLayanan = [
                    'id_users' => $id,
                    'id_layanan' => $this->request->getVar('id_layanan'),
                    'jenis_layanan' => $jenis_layanan,
                    'bukti_transfer' => $this->tambah_bukti_transfer(),
                    'metode_konsultasi' => $this->request->getVar('metode_konsultasi'),
                    'paper' => $this->tambah_paper(),
                ];
                
                $newDataUser = [
                    'is_registered' => 'Sedang Dalam Proses Verifikasi',
                ];

                $this->layananPublikasiModel->saveUser($newDataLayanan);
                $this->manageUserModel->updateUser($newDataUser, $id);
                $session = session();
                $session->setFlashData('success', 'Registrasi layanan publikasi berhasil');
                return redirect()->to('/user');
            }
        }
        return view('/layanan/registrasi_layanan', $data);
    }
}
