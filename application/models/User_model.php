<?php
    class User_model extends CI_Model
    {

        public function register($data)
        {
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
            return $this->db->insert('users', $data);
        }

        public function login($email, $password)
        {
            $user = $this->db->get_where('users', ['email' => $email])->row_array();
            if ($user && password_verify($password, $user['password'])) {
                return $user;
            }
            return false;
        }
    }
?>