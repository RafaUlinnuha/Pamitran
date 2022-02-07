<?php

namespace App\Controllers;

class Tentang extends BaseController
{
    public function visi_misi()
    {
        $data = [
            'title' => 'Visi Misi'
        ];
        return view('/pages/visi_misi', $data);
    }

    public function tim_pamitran()
    {
        $data = [
            'title' => 'Tim Pamitran'
        ];
        return view('/pages/tim_pamitran', $data);
    }
}
