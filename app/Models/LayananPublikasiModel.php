<?php 

namespace App\Models;

use CodeIgniter\Model;

class LayananPublikasiModel extends Model
{
    protected $table = 'layanan_publikasi';
    protected $primaryKey = 'id_layanan';
    protected $allowedFields = ['id_layanan','id_users','jenis_layanan','bukti_transfer','metode_konsultasi','paper'];

    public function getUser($id_layanan = false)
    {
        if($id_layanan === false){
            return $this->findAll();
        } else {
            return $this->getWhere(['id_layanan' => $id_layanan]);
        }
    }

    public function saveUser($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
}
