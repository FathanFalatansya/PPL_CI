<?php

namespace App\Controllers;
use App\Models\M_Pegawai;

class c_pegawai extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new M_Pegawai();
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data Pegawai'
        ];
        return view('Pegawai/v_pegawai_create', $data);
    }

    public function display()
    {
         return view('Pegawai/view_pegawai');
    }

    public function view_pegawai_display()
    {
        $keyword = $this->request->getVar('keyword') ? $this->request->getVar('keyword') : null;
        $pegawai = $keyword ? $this->model->pegawaiSearch($keyword) : $this->model->getAll();
        if (count($pegawai) == 0) {
            $data = [
                'pegawai' => $pegawai,
                'title' => 'Data Pegawai',
                'notfound' => 'Data tidak ditemukan',
                'nodata' => 'Belum ada data'
            ];
        } else {
            $data = [
                'pegawai' => $pegawai,
                'title' => 'Data Pegawai'
            ];
        }
        return view('Pegawai/v_pegawai_display',$data);
    }

    public function store()
    {
        if (!$this->validate([
            'Nim' => [
                'label' => 'NIM',
                'rules' => 'required|numeric|min_length[9]|max_length[9]|is_unique[pegawai.Nim]',
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
                'rules' => 'required|alpha_space',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'alpha_space' => '{field} harus berupa huruf'
                ]
            ],

            'Telp' => [
                'label' => 'Telp',
                'rules' => 'required|numeric|min_length[10]|max_length[13]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'numeric' => '{field} harus berupa angka',
                    'min_length' => '{field} harus berjumlah 10 karakter',
                    'max_length' => '{field} harus berjumlah 13 karakter'
                ]
            ],

            'Email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'valid_email' => '{field} harus berupa email'
                ]
            ],

        ])){
            return view('Pegawai/v_pegawai_create', [
                'errors' => $this->validator->getErrors(),
            ]);
        }
        $data = [
            'Nim' => $this->request->getPost('Nim'),
            'Nama' => $this->request->getPost('Nama'),
            'Gender' => $this->request->getPost('Gender'),
            'Telp' => $this->request->getPost('Telp'),
            'Email' => $this->request->getPost('Email'),
            'Pendidikan' => $this->request->getPost('Pendidikan'),
        ];

        $this->model->pegawai_store($data);
        return redirect()->to('/Pegawai');
    }

    public function detail_pegawai($Nim)
    {
        $model = new \App\Models\M_Pegawai;
        $data = [
            'pegawai' => $model->get_pegawai($Nim),
            'title' => 'Detail Data Pegawai'
        ];
        return view('Pegawai/v_pegawai_detail',$data);
    }

    public function edit($Nim)
    {
        $model = new \App\Models\M_Pegawai;
        $data = [
            'pegawai' => $model->get_pegawai($Nim),
            'title' => 'Edit Data Pegawai'
        ];
        return view('Pegawai/v_pegawai_edit',$data);
    }

    public function update($Nim)
    {
        if (!$this->validate([
            'Nim' => [
                'label' => 'NIM',
                'rules' => 'required|numeric|min_length[9]|max_length[9]|is_unique[pegawai.Nim,Nim,' . $Nim . ']',
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
                'rules' => 'required|alpha_space',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'alpha_space' => '{field} harus berupa huruf'
                ]
            ],

            'Telp' => [
                'label' => 'Telp',
                'rules' => 'required|numeric|min_length[10]|max_length[13]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'numeric' => '{field} harus berupa angka',
                    'min_length' => '{field} harus berjumlah 10 karakter',
                    'max_length' => '{field} harus berjumlah 13 karakter'
                ]
            ],

            'Email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'valid_email' => '{field} harus berupa email'
                ]
            ],

        ])){
            return view('Pegawai/v_pegawai_edit', [
                'pegawai' => $this->model->get_pegawai($Nim), 
                'errors' => $this->validator->getErrors(),
            ]);
        }
        
        $data = [
            'Nim' => $this->request->getPost('Nim'),
            'Nama' => $this->request->getPost('Nama'),
            'Gender' => $this->request->getPost('Gender'),
            'Telp' => $this->request->getPost('Telp'),
            'Email' => $this->request->getPost('Email'),
            'Pendidikan' => $this->request->getPost('Pendidikan'),
        ];
        $model = new \App\Models\M_Pegawai;
        $model->update_pegawai($data, $Nim);
        return redirect()->to('/Pegawai');
    }

    public function delete($Nim)
    {
        $model = new \App\Models\M_Pegawai;
        $model->delete_pegawai($Nim);
        return redirect()->to('/Pegawai');
    }


    

}