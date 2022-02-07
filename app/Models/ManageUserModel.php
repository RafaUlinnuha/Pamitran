<?php

namespace App\Models;

use CodeIgniter\Model;

class ManageUserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    public function getUser($id = false)
    {
        if($id === false){
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function saveUser($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateUser($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }
 
    public function search($keyword){
        return $this->table('users')->like('nama', $keyword)->orLike('email', $keyword);
    }
}