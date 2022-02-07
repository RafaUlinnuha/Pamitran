<?php

namespace App\Controllers;

class Galeri extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Galeri'
        ];

        return view('/pages/galeri', $data);
    }
}
