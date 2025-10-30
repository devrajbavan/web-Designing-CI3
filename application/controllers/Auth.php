<?php
    class Auth extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->model('User_model');
            $this->load->library('session');
            $this->load->helper('url', 'form');
        }

        public function sagar(){
            echo "This is test";
        }

        public function register() {
            /** @var CI_Input $input */
            $input = $this->input->post();
            if($this->input->post()){
                $data = [
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('password')
                ];
                $this->User_model->register($data);
                redirect('auth/login');
            }
            $this->load->view('auth/register');
        }

        public function login(){
            if($this->input->post()){
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $user = $this->User_model->login($email, $password);
                if($user){
                    $this->session->set_userdata('user_id', $user['id']);
                    $this->session->set_userdata('username', $user['username']);
                    redirect('tasks');
                }
                else{
                    $data['error'] = 'Invalid Email or Password';
                    $this->load->view('auth/login');
                    return;
                }
            }
            else{
                $this->load->view('auth/login');
            }
        }

        public function logout(){
            $this->session->sess_destroy();
            redirect('auth/login');
        }
    }
?>