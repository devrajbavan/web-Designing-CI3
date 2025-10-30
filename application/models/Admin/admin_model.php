<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
    protected $table = 'blog_db';

    public function get_all(){
        return $this->db->order_by('created_at','DESC')->get($this->table)->result_array();
    }

    public function get($id){
        return $this->db->where('id',$id)->get($this->table)->row_array();
    }

    public function get_by_email($email){
        $row = $this->db->where('email',$email)->get($this->table)->row_array();
        return $row ? $row : false;
    }

    public function create($data){
        return $this->db->insert($this->table, $data);
    }

    public function update($id, $data){
        return $this->db->where('id',$id)->update($this->table, $data);
    }

    public function delete($id){
        return $this->db->where('id',$id)->delete($this->table);
    }
}
