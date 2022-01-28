<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
    }

    public function login()
    {
        $data = [];
        helper(['form']);
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
                    'validateUser' => 'Email atau Password salah'
                ]
            ];
            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UserModel();
                $user = $model->where('email', $this->request->getVar('email'))->first();
                $this->setUserSession($user);

                return redirect()->to('home');
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
            'level' => $user['level'],
            'isLoggedIn' => true,
        ];
        session()->set($data);
        return true;
    }

    public function register()
    {
        $data = [];
        helper(['form']);
        if ($this->request->getMethod() == 'post'){
            $rules = [
                'nama' => 'required',
                'email' => 'required|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[5]|max_length[50]',
                'phone' => 'required',
                'password_confirm' => 'required|min_length[5]|max_length[50]|matches[password]',
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
                    'required' => 'Nomor telepon wajib diisi'
                ],
                'password' => [
                    'required' => 'Password wajib diisi',
                    'min_length' => 'Password minimal 5 karakter',
                    'max_length' => 'Password maximal 50 karakter'
                ],
                'password_confirm' => [
                    'required' => 'Konfirmasi password wajib diisi',
                    'min_length' => 'Konfirmasi password minimal 5 karakter',
                    'max_length' => 'Konfirmasi password maximal 50 karakter',
                    'matches' => 'Konfirmasi password tidak cocok dengan password'
                ]
            ];
            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $modelUser = new UserModel();
                $newDataUser = [
                    'nama' => $this->request->getVar('nama'),
                    'email' => $this->request->getVar('email'),
                    'phone' => $this->request->getVar('phone'),
                    'password' => $this->request->getVar('password'),
                    'level' => 2,
                ];
                $modelUser->save($newDataUser);
                $session = session();
                $session->setFlashData('success', 'Registrasi Berhasil');
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
