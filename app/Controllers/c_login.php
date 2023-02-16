<?php
namespace App\Controllers;

use App\Controllers\BaseController;
    use CodeIgniter\Controller;
    use App\Models\M_User;

    class c_login extends BaseController {
        public function __construct() {
          
            $this->model = new M_User();
        }
        
        public function index() {
            return view('Auth/v_login');
        }
        
        public function do_login() {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            
            $user = $this->model->login($username, $password);
            
            if($user) {
                // Jika login berhasil, simpan data user ke session
                session()->set('user_name', $username);
                session()->set('isLoggedIn', true);
                // Redirect ke halaman dashboard atau halaman setelah login
                return redirect()->to('/');
            } else {
                // Jika login gagal, tampilkan pesan error
                return redirect()->to('/login')->with('error', 'Username atau Password salah');
            }
        }

        public function logout()
        {
            session()->destroy();
            return redirect()->to('/');
        }
    }
    