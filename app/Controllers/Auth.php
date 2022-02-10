<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->model = new UserModel();
        helper(['url', 'form']);
    }

    public function login()
    {   
        $data = [
            'title' => 'Login'
        ];
        if ($this->request->getMethod() == 'post'){
            $rules = [
                'email' => 'required|valid_email|is_not_unique[users.email]',
                'password' => 'required|validateUser[email,password]',
            ];
            $errors = [
                'email' => [
                    'required' => 'Email wajib diisi',
                    'valid_email' => 'Email tidak valid',
                    'is_not_unique' => 'Email tidak terdaftar',
                ],
                'password' => [
                    'required' => 'Password wajib diisi',
                    'validateUser' => 'Password salah'
                ]
            ];
            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $user = $this->model->where('email', $this->request->getVar('email'))->first();
                $this->setUserSession($user);

                if($user['level'] == 1){
                    return redirect()->to('admin');
                }
                return redirect()->to('/');
            }
        }
        return view('login', $data);
    }
    
    private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'email' => $user['email'],
            'nama' => $user['nama'],
            'phone' => $user['phone'],
            'password' => $user['password'],
            'created_at' => $user['created_at'],
            'level' => $user['level'],
            'isLoggedIn' => true,
        ];
        session()->set($data);
        return true;
    }

    public function register()
    {
        $data = [
            'title' => 'Register'
        ];
        if ($this->request->getMethod() == 'post'){
            $rules = [
                'nama' => 'required',
                'email' => 'required|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[5]|max_length[50]',
                'phone' => 'required|regex_match[/^[0-9]{10,13}$/]',
                'password_confirm' => 'required|matches[password]',
            ];
            $errors = [
                'nama' => [
                    'required' => 'Nama wajib diisi'
                ],
                'email' => [
                    'required' => 'Email wajib diisi',
                    'valid_email' => 'Email tidak valid',
                    'is_unique' => 'Email sudah terpakai'
                ],
                'phone' => [
                    'required' => 'Nomor telepon wajib diisi',
                    'regex_match' => 'Nomor telepon tidak valid'
                ],
                'password' => [
                    'required' => 'Password wajib diisi',
                    'min_length' => 'Password minimal 5 karakter',
                    'max_length' => 'Password maximal 50 karakter'
                ],
                'password_confirm' => [
                    'required' => 'Konfirmasi password wajib diisi',
                    'matches' => 'Konfirmasi password tidak cocok dengan password'
                ]
            ];
            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $newDataUser = [
                    'nama' => $this->request->getVar('nama'),
                    'email' => $this->request->getPost('email'),
                    'phone' => $this->request->getVar('phone'),
                    'password' => $this->request->getVar('password'),
                    'level' => 2,
                ];
                $this->model->save($newDataUser);
                $session = session();
                $session->setFlashData('success', 'Registration successful');
                
                return redirect()->to('/login');
            }
        }
        return view('register', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
