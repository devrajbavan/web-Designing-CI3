<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table_model extends CI_Model {

    public function get_users() {
        return $this->db->get('user')->result_array();
    }
}
