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
                    'required' => 'Current password is required'
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
                $current_password = $this->request->getPost('current_password');
                $new_password = $this->request->getPost('new_password');

                if(!password_verify($current_password, $data['user']['password'])){
                    $this->session->setFlashData('not_match', 'wrong current password');
                    return redirect()->to('/ChangePassword/edit');
                } else {
                    if($current_password == $new_password){
                        $this->session->setFlashData('not_unique', 'new password cannot be the same as current password');
                        return redirect()->to('/ChangePassword/edit');
                    } else {
                        $id = $this->request->getVar('id');
                        $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                        $newDataPassword = ['password' => $password_hash];
                        $this->session->set($newDataPassword);
                        $this->userModel->updateUser($newDataPassword, $id);
                        $this->session->setFlashData('success', 'Your password has been updated successfully');
                        return redirect()->to('user');
                    }
                }
            }
        }
        return view('user/change_password', $data);
    }
}
