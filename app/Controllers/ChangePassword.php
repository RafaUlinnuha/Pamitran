<?php 

namespace App\Controllers;

use App\Models\ManageUserModel;

class ChangePassword extends BaseController
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
        $data = [
            'title' => 'Change Password',
            'user' => $this->userModel->where('id', $this->session->id)->first()
        ];
        if ($this->request->getMethod() == 'post'){
            $rules = [
                'current_password' => 'required',
                'new_password' => 'required|min_length[5]|max_length[50]',
                'repeat_password' => 'required|matches[new_password]',
            ];
            $errors = [
                'current_password' => [
                    'required' => 'Kata sandi lama wajib diisi'
                ],
                'new_password' => [
                    'required' => 'Kata sandi baru wajib diisi',
                ],
                'repeat_password' => [
                    'required' => 'Konfirmasi kata sandi baru wajib diisi',
                    'matches' => 'Konfirmasi kata sandi baru tidak cocok dengan kata sandi baru'
                ]
            ];
            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $current_password = $this->request->getPost('current_password');
                $new_password = $this->request->getPost('new_password');

                if(!password_verify($current_password, $data['user']['password'])){
                    $this->session->setFlashData('not_match', 'wrong current password');
                    return redirect()->to('/ChangePassword/edit');
                } else {
                    if($current_password == $new_password){
                        $this->session->setFlashData('not_unique', 'Kata sandi baru tidak boleh sama dengan kata sandi lama');
                        return redirect()->to('/ChangePassword/edit');
                    } else {
                        $id = $this->request->getVar('id');
                        $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                        $newDataPassword = ['password' => $password_hash];
                        $this->session->set($newDataPassword);
                        $this->userModel->updateUser($newDataPassword, $id);
                        $this->session->setFlashData('success', 'Kata sandi anda berhasil diperbaharui');
                        return redirect()->to('user');
                    }
                }
            }
        }
        return view('user/change_password', $data);
    }
}
