<?php

namespace App\Controllers;

class Layanan extends BaseController
{
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
}
