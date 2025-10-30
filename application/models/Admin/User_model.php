<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function register($data)
    {
         
        $data['pass'] = password_hash($data['pass'], PASSWORD_DEFAULT);
        return $this->db->insert('user', $data);
    }

    public function login($email, $password)
    {
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
         if ($user && password_verify($password, $user['pass'])) {
            return $user;
        }
        return false;
    }

    public function get_all_users()
    {
        return $this->db->get('user')->result_array();
    }
}
