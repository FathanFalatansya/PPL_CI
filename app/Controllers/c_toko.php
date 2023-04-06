<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_Toko;

class c_toko extends BaseController
{
    protected $model;
    protected $session;
    

    public function __construct()
    {
        $this->model = new M_Toko();
        $this->session = session();
        $this->cart = \Config\Services::cart();
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

    public function add_to_cart($id)
    {
        $produk = $this->model->getById($id); //ambil data produk berdasarkan id
        if(!$produk) { //jika produk tidak ditemukan, redirect ke halaman sebelumnya
            return redirect()->back();
        }


        $cart = $this->session->get('cart') ?? []; //ambil data keranjang dari session, jika belum ada maka buat array kosong
        $index = $this->find_product_in_cart($id); //cari index dari produk dalam keranjang

        if($index === false) { //jika produk belum ada dalam keranjang
            $cart[] = [
                'id' => $id,
                'nama_produk' => $produk['nama_produk'],
                'harga' => $produk['harga'],
                'jumlah' => 1
            ];
        } else { //jika produk sudah ada dalam keranjang, tambahkan jumlahnya
            $cart[$index]['jumlah']++;
        }

        $this->session->set('cart', $cart); //simpan data keranjang baru ke session
        //dd($cart);
        return redirect()->to('/Toko'); //redirect ke halaman toko        
    }

    private function find_product_in_cart($id)
    {
        $cart = $this->session->get('cart') ?? []; //ambil data keranjang dari session, jika belum ada maka buat array kosong

        foreach($cart as $index => $item) {
            if($item['id'] == $id) {
                return $index; //jika produk ditemukan, kembalikan indexnya
            }
        }

        return false; //jika produk tidak ditemukan, kembalikan false
    }

    public function remove_from_cart($id)
    {
        $cart = $this->session->get('cart') ?? []; //ambil data keranjang dari session, jika belum ada maka buat array kosong
        $index = $this->find_product_in_cart($id); //cari index dari produk dalam keranjang

        if($index !== false) { //jika produk ditemukan
            unset($cart[$index]); //hapus produk dari keranjang
        }

        $this->session->set('cart', $cart); //simpan data keranjang baru ke session
        return redirect()->to('/Toko'); //redirect ke halaman keranjang
    }


}   
