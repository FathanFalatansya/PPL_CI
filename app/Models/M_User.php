<?php 
    
    namespace App\Models;

    use CodeIgniter\Model;

    class M_User extends Model {

        protected $table = 'admin';
        protected $primaryKey = 'id';
        
        public function __construct() {
            $this->db = db_connect();
        }   

        public function login($username, $password) {

            return $this->db->table('admin')
                ->where('username', $username)
                ->where('password', $password)
                ->countAllResults() == 1;
        }
    }
    

     


   