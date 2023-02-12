<?php

namespace App\Controllers;
use App\Models\M_Mahasiswa;

class c_mahasiswa extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new M_Mahasiswa();
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data Mahasiswa'
        ];
        return view('v_mahasiswa_create', $data);
    }

    public function display()
    {
         return view('view_mahasiswa');
    }

    public function view_mahasiswa_display()
    {
        $model = new \App\Models\M_Mahasiswa;
        $data = [
            'mahasiswa' => $model->getAll(),
            'title' => 'Data Mahasiswa'
        ];
        return view('v_mahasiswa_display',$data);
    }

    public function detail_mahasiswa($Nim)
    {
        $model = new \App\Models\M_Mahasiswa;
        $data = [
            'mahasiswa' => $model->get_mahasiswa($Nim),
            'title' => 'Detail Data Mahasiswa'
        ];
        return view('v_mahasiswa_detail',$data);
    }

    public function store()
    {
        if (!$this->validate([
            'Nim' => [
                'label' => 'NIM',
                'rules' => 'required|numeric|min_length[9]|max_length[9]|is_unique[mahasiswa.Nim]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'numeric' => '{field} harus berupa angka',
                    'min_length' => '{field} harus berjumlah 9 karakter',
                    'max_length' => '{field} harus berjumlah 9 karakter',
                    'is_unique' => '{field} Sudah Digunakan'
                ]
            ],
            'Nama' => [
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'Umur' => [
                'label' => 'Umur',
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'numeric' => '{field} harus berupa angka'
                ]
            ]
        ])) {
            return view('v_mahasiswa_create', [
                'errors' => $this->validator->getErrors(),
                'title' => 'Store Mahasiswa Error !'
            ]);
        }
        $data = [
            'Nim' => $this->request->getPost('Nim'),
            'Nama' => $this->request->getPost('Nama'),
            'Umur' => $this->request->getPost('Umur')
        ];

        $this->model->mahasiswa_store($data);
        return redirect()->to('/Mahasiswa');
    }
}