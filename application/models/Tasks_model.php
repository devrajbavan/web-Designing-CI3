<?php
class Tasks_model extends CI_Model {

    public function get_tasks($user_id) {
        return $this->db->get_where('tasks', ['user_id' => $user_id])->result_array();
    }

    public function create_task($data) {
        return $this->db->insert('tasks', $data);
    }

    public function get_task($id, $user_id) {
        return $this->db->get_where('tasks', ['id' => $id, 'user_id' => $user_id])->row_array();
    }

    public function update_task($id, $user_id, $data) {
        $this->db->where(['id' => $id, 'user_id' => $user_id]);
        return $this->db->update('tasks', $data);
    }

    public function delete_task($id, $user_id) {
        $this->db->where(['id' => $id, 'user_id' => $user_id]);
        return $this->db->delete('tasks');
    }
}
