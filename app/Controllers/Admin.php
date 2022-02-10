<?php 

namespace App\Controllers;

use App\Models\ManageUserModel;

class Admin extends BaseController
{

    protected $userModel;

    public function __construct()
    {
        helper(['form', 'url']);
        $this->session = session();
        $this->userModel = new ManageUserModel();
    }

    public function check_admin(){
        $level_1 = $this->request->getVar('level');
        if($level_1 != 1){
            echo "<script>history.go(-1);</script>";
            die(); 
        }
    }

    public function index()
    {
        $this->check_admin();
        $currentPage = $this->request->getVar('page_users') ? $this->request->getVar('page_users') : 1;
        $keyword = $this->request->getVar('keyword');
        if($keyword){
            $user = $this->userModel->search($keyword);
        } else {
            $user = $this->userModel;
        }
        $data = [
            'title' => 'Admin',
            'user' => $user->paginate(5, 'users'),
            'pager' => $this->userModel->pager,
            'currentPage' => $currentPage
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
            $rules = [
                'nama' => 'required',
                'email' => 'required',
                'phone' => 'required',
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $newDataUser = [
                    'nama' => $this->request->getPost('nama'),
                    'email' => $this->request->getPost('email'),
                    'phone' => $this->request->getPost('phone'),
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
        $this->session->setFlashData('success', 'Data has been deleted successfully');
        return redirect()->to('admin');
    }
}
