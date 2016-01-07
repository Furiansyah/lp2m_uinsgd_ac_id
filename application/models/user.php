<?php 
Class Model_user extends CI_Model {
        function login($username, $password) {
            $this -> db -> select('username, password'); 
            $this -> db -> from('login_session'); //nama tabel pada database
            $this -> db -> where('username', $username);
            $this -> db -> where('password', $password);
            $this -> db -> limit(1); //menandakan data ditemukan atau sama dengan satu
            $query = $this -> db -> get();

            if($query -> num_rows() == 1) {
                return $query->result();
            }
            else {
                return false;
            }
        }
    }
    ?> 