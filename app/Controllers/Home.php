<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Pamitran'
        ];
        return view('home', $data);
    }
}
