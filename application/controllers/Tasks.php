<?php
class Tasks extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Tasks_model');
        $this->load->library('session');
        $this->load->helper(['url', 'form']);

        // Simple auth check
        if(!$this->session->userdata('user_id')) {
            redirect('auth/login');
        }
    }

    public function index() {
        $user_id = $this->session->userdata('user_id');
        $data['tasks'] = $this->Tasks_model->get_tasks($user_id);
        $this->load->view('tasks/index', $data);
    }

    public function create() {
        if($this->input->post()) {
            $data = [
                'user_id' => $this->session->userdata('user_id'),
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description')
            ];
            $this->Tasks_model->create_task($data);
            redirect('tasks');
        }
        $this->load->view('tasks/create');
    }

    public function edit($id) {
        $user_id = $this->session->userdata('user_id');
        if($this->input->post()) {
            $data = [
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'status' => $this->input->post('status')
            ];
            $this->Tasks_model->update_task($id, $user_id, $data);
            redirect('tasks');
        }
        $data['task'] = $this->Tasks_model->get_task($id, $user_id);
        $this->load->view('tasks/edit', $data);
    }

    public function delete($id) {
        $user_id = $this->session->userdata('user_id');
        $this->Tasks_model->delete_task($id, $user_id);
        redirect('tasks');
    }
}
