<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
        $this->check_login();
    }

    private function check_login(){
        if (!$this->session->userdata('logged_in')) redirect('auth/login');
    }

    public function index(){
        $data['title'] = 'Admins';
        $data['admins'] = $this->Admin_model->get_all();
        $data['content_view'] = 'pages/admins';
        $this->load->view('templates/main', $data);
    }

    public function create(){
        $this->form_validation->set_rules('f_name','First Name','required');
        $this->form_validation->set_rules('l_name','Last Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[blog_db.email]');
        $this->form_validation->set_rules('pass','Password','required|min_length[6]');

        if ($this->form_validation->run() === FALSE){
            $data['title'] = 'Create Admin';
            $data['content_view'] = 'pages/admins_create';
            $this->load->view('templates/main', $data);
            return;
        }

        $payload = [
            'f_name' => $this->input->post('f_name', TRUE),
            'l_name' => $this->input->post('l_name', TRUE),
            'email' => $this->input->post('email', TRUE),
            'pass' => password_hash($this->input->post('pass', TRUE), PASSWORD_BCRYPT)
        ];
        $this->Admin_model->create($payload);
        $this->session->set_flashdata('success','Admin created.');
        redirect('admins');
    }

    public function edit($id = null){
        if (!$id) redirect('admins');
        $admin = $this->Admin_model->get($id);
        if (!$admin) show_404();

        $this->form_validation->set_rules('f_name','First Name','required');
        $this->form_validation->set_rules('l_name','Last Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');

        if ($this->form_validation->run() === FALSE){
            $data['title'] = 'Edit Admin';
            $data['admin'] = $admin;
            $data['content_view'] = 'pages/admins_edit';
            $this->load->view('templates/main', $data);
            return;
        }

        $update = [
            'f_name' => $this->input->post('f_name', TRUE),
            'l_name' => $this->input->post('l_name', TRUE),
            'email' => $this->input->post('email', TRUE)
        ];
        $pass = $this->input->post('pass', TRUE);
        if (!empty($pass)) $update['pass'] = password_hash($pass, PASSWORD_BCRYPT);

        $this->Admin_model->update($id, $update);
        $this->session->set_flashdata('success','Admin updated.');
        redirect('admins');
    }

    public function delete($id = null){
        if (!$id) redirect('admins');
        $this->Admin_model->delete($id);
        $this->session->set_flashdata('success','Admin deleted.');
        redirect('admins');
    }
}
