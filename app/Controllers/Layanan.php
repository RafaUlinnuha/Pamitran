<?php

namespace App\Controllers;

use App\Models\ManageUserModel;

class Layanan extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        helper(['form', 'url']);
        $this->session = session();
        $this->userModel = new ManageUserModel();
    }

    public function satu()
    {
        $data = [
            'title' => 'Satu'
        ];
        return view('layanan/satu', $data);
    }

    public function dua()
    {
        $data = [
            'title' => 'Dua'
        ];
        return view('layanan/dua', $data);
    }

    public function tiga()
    {
        $data = [
            'title' => 'Tiga'
        ];
        return view('layanan/tiga', $data);
    }

    public function empat()
    {
        $data = [
            'title' => 'Empat'
        ];
        return view('layanan/empat', $data);
    }

    public function lima()
    {
        $data = [
            'title' => 'Lima'
        ];
        return view('layanan/lima', $data);
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

    public function registrasi_layanan()
    {
        $data = [
            'title' => 'Registrasi Layanan',
            'user' => $this->userModel->where('id', $this->session->id)->first()
        ];

        return view('layanan/registrasi_layanan', $data);
    }

    public function tambahPaper()
    {
        $paper = $this->request->getFile('paper');
        $namaPaper = $paper->getClientName();
        $paper->move('assets/img/', $namaPaper);
        return $namaPaper;
    }

    public function save()
    {
        $data = [];
        if ($this->request->getMethod() == 'post'){
            $rules = [
                'paper' => 'uploaded[paper]|ext_in[paper,png,jpg,jpeg]'
            ];
            $errors = [
                'paper' => [
                    'ext_in' => 'File paper salah'
                ]
            ];
            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $newDataMenu = [
                    'paper' => $this->tambahPaper(),
                ];
                $this->menuModel->saveMenu($newDataMenu);
                $session = session();
                $session->setFlashData('success', 'Data berhasil ditambah');
                return redirect()->to('menu');
            }
        }
        return view('admin/AddMenu', $data);
    }
}
