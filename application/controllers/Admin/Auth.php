<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin/User_model');
        $this->load->library('session');
    }

    public function register()  {
        /** @var CI_Input $input */
        $input = $this->input->post();
        if($this->input->post()){
            $data = [
                'f_name' => $this->input->post('f_name'),
                'l_name' => $this->input->post('l_name'),
                'email' => $this->input->post('email'),
                'pass' => $this->input->post('pass')
            ];
            $this->User_model->register($data);
            redirect('login');
        }
        $this->load->view('auth/admin/register');
        // echo 'data not stored';
    }

    public function login(){
        if($this->input->post()){
            $email = $this->input->post('email');
            $password = $this->input->post('pass');
             
            $user = $this->User_model->login($email, $password);
            if($user){
                $this->session->set_userdata('user_id', $user['id']);
                $this->session->set_userdata('username', $user['f_name']);
                redirect('Admin/Dashboard');
                echo 'login successful';
            }
            else{
                $data['error'] = 'Invalid Email or Password';
                $this->load->view('auth/admin/login');
                echo $data['error'];
                return;
            }
        }
        else{
            $this->load->view('auth/admin/login');
        }
    }

    public function Error_404() {
        $this->load->view('pages/404.php');
    }

    public function forgot_password() {
        $this->session->sess_destroy();
        $this->load->view('auth/admin/forgot-password');
    }
}
