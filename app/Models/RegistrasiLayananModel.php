<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistrasiLayanan extends Model
{
    protected $table = 'registrasi';
    protected $primaryKey = 'id_registrasi';
    protected $allowedFields = ['id','id_registrasi'];

    public function foreign_key_checks($var)
    {
        $this->db->query("SET foreign_key_checks = $var; ");
    }
}