<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Pegawai extends Model
{
    protected $table = 'pegawai';
    protected $primaryKey = 'Nim';
    
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM pegawai";
        $data = $this->db->query($sql);
        return $data-> getResultArray();
    }

    public function pegawaiSearch($keyword)
    {
        $sql = "SELECT * FROM pegawai WHERE Nim LIKE '%{$keyword}%' OR Nama LIKE '%{$keyword}%' OR Gender LIKE '%{$keyword}%' OR Telp Like '%{$keyword}%' OR Email Like '%{$keyword}%' OR Pendidikan Like '%{$keyword}%'";
        $data = $this->db->query($sql, "%$keyword%");
        return $data->getResultArray();
    }

    public function get_pegawai($Nim)
    {
        $sql = "SELECT * FROM pegawai WHERE Nim = $Nim";
        $data = $this->db->query($sql, $Nim);
        return $data->getRowArray();
    }

    public function pegawai_store($data)
    {
        return $this->db->query("INSERT INTO {$this->table} (Nim,Nama,Gender,Telp,Email,Pendidikan) Values ('{$data['Nim']}','{$data['Nama']}','{$data['Gender']}','{$data['Telp']}','{$data['Email']}','{$data['Pendidikan']}')");
    }

    public function update_pegawai($data, $Nim)
    {
        return $this->db->query("UPDATE {$this->table} SET Nim = '{$data['Nim']}', Nama = '{$data['Nama']}', Gender = '{$data['Gender']}', Telp = '{$data['Telp']}', Email = '{$data['Email']}', Pendidikan = '{$data['Pendidikan']}' WHERE Nim = '{$Nim}'");
    }

    public function delete_pegawai($Nim)
    {
        return $this->db->query("DELETE FROM {$this->table} WHERE Nim = '{$Nim}'");
    }

}