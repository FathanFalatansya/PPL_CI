<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_Toko;

class c_toko extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new M_Toko();
    }

    public function display()
    {
         return view('Toko/v_toko_index'); //menampilkan data ke view   
    }
    
    public function view_toko_display()
    {
        $produk = $this->model->getAll();
        if (count($produk) == 0) {
            $data = [
                'produk' => $produk,
                'title' => 'Data Toko',
                'notfound' => 'Data tidak ditemukan',
                'nodata' => 'Belum ada data'
            ];
        } else {
            $data = [
                'produk' => $produk,
                'title' => 'Data Toko'
            ];
        }
        return view('Toko/v_toko_display',$data);
    }
}   
