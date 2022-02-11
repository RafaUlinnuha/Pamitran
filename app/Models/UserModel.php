<?php 

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['id', 'nama', 'email', 'password', 'phone', 'is_registered', 'role', 'created_at'];
    protected $useTimestamps = true;
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert(array $data)
    {
        $data = $this->passwordHash($data);

        return $data;
    }

    protected function beforeUpdate(array $data)
    {
        $data = $this->passwordHash($data);

        return $data;
    }
    
    protected function passwordHash(array $data)
    {
        if(isset($data['data']['password']))
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        
        return $data;
    }
}
