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

    public function Kerjasama_Penelitian()
    {
        $data = [
            'title' => 'Kerjasama Penelitian'
        ];
        return view('layanan/Kerjasama_Penelitian', $data);
    }

    public function Pamitran_Publication_Services()
    {
        $data = [
            'title' => 'Pamitran_Publication_Services'
        ];
        return view('layanan/Pamitran_Publication_Services', $data);
    }

    public function enam()
    {
        $data = [
            'title' => 'Enam'
        ];
        return view('layanan/enam', $data);
    }

    public function tujuh()
    {
        $data = [
            'title' => 'Tujuh'
        ];
        return view('layanan/tujuh', $data);
    }

    public function delapan()
    {
        $data = [
            'title' => 'Delapan'
        ];
        return view('layanan/delapan', $data);
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
