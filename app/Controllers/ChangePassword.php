<?php 

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ManageUserModel;

class ChangePassword extends Controller
{

    protected $userModel;

    public function __construct()
    {
        helper(['form', 'url']);
        $this->session = session();
        $this->userModel = new ManageUserModel();
    }

    public function edit()
    {
        $id = $this->request->getPost('id');
        $data = [
            'title' => 'Edit Account',
            'user' => $this->userModel->getUser($id)->getRow()
        ];
        return view('user/change_password', $data);
    }

    public function update()
    {
        if ($this->request->getMethod() == 'post'){
            $rules = [
                'confirm_password' => 'required',
                'new_password' => 'required|min_length[5]|max_length[50]',
                'repeat_password' => 'required|min_length[5]|max_length[50]|matches[new_password]',
            ];
            $errors = [
                'confirm_password' => [
                    'required' => 'Confirm password is required'
                ],
                'new_password' => [
                    'required' => 'New password is required',
                ],
                'repeat_password' => [
                    'required' => 'Repeat password is required',
                    'matches' => 'Repeat password does not match new password'
                ]
            ];
            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $id = $this->request->getVar('id');
                $newDataUser = [
                    'id' => $id,
                    'email' => $this->request->getPost('email'),
                    'level' => $this->request->getVar('level'),
                    'password' => $this->request->getVar('new_password'),
                ];
                $this->userModel->updateUser($newDataUser, $id);
                $this->session->setFlashData('success', 'Your password has been updated successfully');
                return redirect()->to('user');
            }
        }
        $this->session->setFlashData('errors', 'Failed to update your password');
        return redirect()->to('user');
    }
}
