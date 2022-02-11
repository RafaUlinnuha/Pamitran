<?php 

namespace App\Controllers;

use App\Models\ManageUserModel;
use App\Models\LayananPublikasiModel;

class Admin extends BaseController
{

    protected $userModel;

    public function __construct()
    {
        helper(['form', 'url']);
        $this->session = session();
        $this->userModel = new ManageUserModel();
        $this->layananPublikasiModel = new LayananPublikasiModel();
    }

    public function check_admin(){
        $role_admin = $this->session->role;
        if($role_admin != 'admin'){
            echo "<script>history.go(-1);</script>";
            die(); 
        }
    }

    public function index()
    {
        $user = $this->userModel->getUser();
        $data = [
            'title' => 'Admin',
            'user' => $user,
        ];
        
        return view('admin/user', $data);
    }

    public function detail($id)
    {
        $this->check_admin();
        $data = [
            'title' => 'User Detail',
            'user' => $this->userModel->getUser($id)->getRow()
        ];
        return view('admin/detail_user', $data);
    }

    public function edit($id)
    {
        $this->check_admin();
        $data = [
            'title' => 'Edit Account',
            'user' => $this->userModel->getUser($id)->getRow()
        ];
        return view('admin/edit_user', $data);
    }

    public function update()
    {
        $this->check_admin();
        $id = $this->request->getPost('id');

        if ($this->request->getMethod() == 'post'){
            $old_id = $this->userModel->getUser($id)->getRow();
            if($old_id->email == $this->request->getPost('email')){
                $rule_email = 'required|valid_email';
            } else {
                $rule_email = 'required|valid_email|is_unique[users.email]';
            }
            $rules = [
                'nama' => 'required',
                'email' => $rule_email,
                'phone' => 'required|regex_match[/^[0-9]{10,13}$/]',
                'role' => 'required',
                'is_registered' => 'required',
            ];
            $errors = [
                'nama' => [
                    'required' => 'Nama wajib diisi',
                ],
                'email' => [
                    'required' => 'Email wajib diisi',
                    'valid_email' => 'Format email tidak valid',
                    'is_unique' => 'Email sudah terpakai'
                ],
                'phone' => [
                    'required' => 'Nomor telepon wajib diisi',
                    'regex_match' => 'Format nomor telepon tidak valid'
                ],
                'role' => [
                    'required' => 'Role wajib diisi',
                ],
                'is_registered' => [
                    'required' => 'is_registered wajib diisi',
                ],
            ];
            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $newDataUser = [
                    'nama' => $this->request->getPost('nama'),
                    'email' => $this->request->getPost('email'),
                    'phone' => $this->request->getPost('phone'),
                    'role' => $this->request->getPost('role'),
                    'is_registered' => $this->request->getPost('is_registered'),
                ];
                $this->userModel->updateUser($newDataUser, $id);
                $this->session->setFlashData('success', 'Data has been updated successfully');
                return redirect()->to('admin');
            }
        }
        return redirect()->to("admin/edit/$id");
    }

    public function delete($id)
    {
        $this->check_admin();
        $this->userModel->delete($id);
        $this->session->setFlashData('success', 'Data berhasil dihapus');
        return redirect()->to('admin');
    }

    public function layanan_publikasi()
    {
        $this->check_admin();
        $layanan_publikasi = $this->layananPublikasiModel->join('users', 'layanan_publikasi.id_users = users.id')->findAll();
        $data = [
            'title' => 'Kelola Layanan Publikasi',
            'results' => $layanan_publikasi,
        ];
        
        return view('admin/layanan_publikasi', $data);
    }

    public function detail_layanan($id_layanan)
    {
        $this->check_admin();
        $layanan_publikasi = $this->layananPublikasiModel->join('users', 'layanan_publikasi.id_users = users.id')->where('id_layanan', $id_layanan)->first();
        $data = [
            'title' => 'Detail Registrasi Layanan',
            'results' => $layanan_publikasi,
        ];
        return view('admin/detail_layanan', $data);
    }

    public function edit_layanan($id_layanan)
    {
        $this->check_admin();
        $layanan_publikasi = $this->layananPublikasiModel->join('users', 'layanan_publikasi.id_users = users.id')->getUser($id_layanan)->getRow();
        $data = [

            'title' => 'Edit Registrasi Layanan',
            'results' => $layanan_publikasi,
        ];
        return view('admin/edit_layanan', $data);
    }

    public function download_bukti_transfer($id_layanan){
        $data_bukti_transfer = $this->layananPublikasiModel->getUser($id_layanan)->getRow();
        return $this->response->download('assets/img/bukti_transfer/' . $data_bukti_transfer->bukti_transfer, null);
    }

    public function download_paper($id_layanan){
        $data_paper = $this->layananPublikasiModel->getUser($id_layanan)->getRow();
        return $this->response->download('assets/uploads/' . $data_paper->paper, null);
    }

    public function delete_layanan($id_layanan)
    {
        $this->check_admin();

        $file = $this->layananPublikasiModel->getUser($id_layanan)->getRow();
        unlink('assets/img/bukti_transfer/' . $file->bukti_transfer);
        $this->layananPublikasiModel->delete($id_layanan);


        $this->session->setFlashData('success', 'Data berhasil dihapus');
        return redirect()->to('layanan_publikasi');
    }

}
