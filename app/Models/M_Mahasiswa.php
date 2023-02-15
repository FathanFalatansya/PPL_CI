<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Mahasiswa extends Model
{

    protected $table      = 'mahasiswa';
    protected $primaryKey = 'nim';


    public function __construct()
    {
        $this->db = db_connect();
    }


    public function getAll()
    {
        $sql = "SELECT * FROM mahasiswa";

        $data = $this->db->query("SELECT * FROM {$this->table}");

        return $data-> getResultArray();
    }



    public function mahasiswa_store($data)
    {
        return $this->db->query("INSERT INTO {$this->table} (Nim, Nama, Umur) VALUES ('{$data['Nim']}', '{$data['Nama']}', '{$data['Umur']}')");
    }
    
    public function get_mahasiswa($Nim)
    {
        $sql = "SELECT * FROM mahasiswa WHERE Nim ='{$Nim}'";

        $data = $this->db->query($sql);

        return $data-> getRowArray();
    }

    public function mahasiswaSearch($keyword)
    {
        $data = $this->db->query("SELECT * FROM {$this->table} WHERE nim LIKE '%{$keyword}%' OR nama LIKE '%{$keyword}%' OR umur LIKE '%{$keyword}%'");
        $this->db->close();
        return $data->getResultArray();
    }
}
