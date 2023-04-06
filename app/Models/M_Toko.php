<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Toko extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id_produk';

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM produk";
        $data = $this->db->query($sql);
        return $data-> getResultArray();
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM produk WHERE id_produk = ?";
        $data = $this->db->query($sql, $id);
        return $data->getRowArray();
    }

    
}
