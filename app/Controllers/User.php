<?php 

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ManageUserModel;

class User extends Controller
{

    protected $userModel;

    public function __construct()
    {
        helper(['form', 'url']);
        $this->userModel = new ManageUserModel();
    }

    public function index()
    {
        $user = $this->userModel->getUser();
        $data = [
            'results' => $user,
        ];
        
        return view('admin/user', $data);
    }

    
    public function save()
    {
        $data = [];
        if ($this->request->getMethod() == 'post'){
            $rules = [
                'jenis' => 'required',
                'nama' => 'required',
                'deskripsi' => 'required',
                'harga' => 'required',
            ];
            $errors = [

            ];
            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $newDataUser = [
                    'jenis' => $this->request->getPost('jenis'),
                    'nama' => $this->request->getPost('nama'),
                    'deskripsi' => $this->request->getPost('deskripsi'),
                    'harga' => $this->request->getPost('harga'),
                ];
                $this->userModel->saveUser($newDataUser);
                $session = session();
                $session->setFlashData('success', 'Data berhasil ditambah');
                return redirect()->to('user');
            }
        }
        return view('admin/AddUser', $data);
    }

    public function edit($id)
    {
        $data['user'] = $this->userModel->getUser($id)->getRow();
        return view('admin/EditUser', $data);
    }

    public function update()
    {
        $kode_menu = $this->request->getPost('kode_menu');
        if ($this->request->getMethod() == 'post'){
            $rules = [
                'gambar' => 'ext_in[gambar,png,jpg,jpeg]'
            ];
            $errors = [
                'gambar' => [
                    'ext_in' => 'File gambar salah'
                ]
            ];
            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $newDataMenu = [
                    'jenis' => $this->request->getPost('jenis'),
                    'nama' => $this->request->getPost('nama'),
                    'deskripsi' => $this->request->getPost('deskripsi'),
                    'harga' => $this->request->getPost('harga'),
                    'gambar' => $this->tambahGambar(),
                ];
                $this->userModel->updateMenu($newDataMenu, $kode_menu);
                $session = session();
                $session->setFlashData('success', 'Data berhasil diubah');
                return redirect()->to('menu');
            }
        }
        return redirect()->to("menu/edit/$kode_menu");
    }

    public function delete($id)
    {
        $this->userModel->deleteUser($id);
        $session = session();
        $session->setFlashData('success', 'Data berhasil dihapus');
        return redirect()->to('user');
    }
}
