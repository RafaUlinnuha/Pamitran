<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        $this->session = session();
    }

    public function check_admin(){
        $role_admin = $this->session->role;
        if($role_admin == 'admin'){
            echo "<script>history.go(-1);</script>";
            die(); 
        }
    }

    public function index()
    {
        $this->check_admin();
        $data = [
            'title' => 'Home | Pamitran'
        ];
        return view('home', $data);
    }
}
