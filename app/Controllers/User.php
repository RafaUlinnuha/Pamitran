<?php 

namespace App\Controllers;

use App\Models\ManageUserModel;

class User extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        helper(['form', 'url']);
        $this->session = session();
        $this->userModel = new ManageUserModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Account Details',
            'user' => $this->userModel->where('id', $this->session->id)->first()
        ];
        return view('user/profile', $data);
    }

    public function edit()
    {
        $id = $this->request->getPost('id');
        $data = [
            'title' => 'Edit Account',
            'user' => $this->userModel->getUser($id)->getRow()
        ];

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
            ];
            $errors = [
                'nama' => [
                    'required' => 'Nama wajib diisi',
                    'alpha' => 'Format nama tidak valid'
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
            ];
            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $newDataUser = [
                    'nama' => $this->request->getPost('nama'),
                    'email' => $this->request->getPost('email'),
                    'phone' => $this->request->getPost('phone'),
                ];
                $this->userModel->updateUser($newDataUser, $id);
                $this->session->set($newDataUser);
                $this->session->setFlashData('success', 'Your profile has been updated successfully');
                return redirect()->to('user');
            }
        }
        return view('user/edit', $data);
    }
}
