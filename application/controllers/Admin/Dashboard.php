<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // load model(s) if needed
    }


    public function index() {
        $data = [];
        $data['title'] = 'Dashboard';
        $data['content_view'] = 'pages/dashboard';
        $data['content_data'] = [];
        $this->load->view('templates/admin/main', $data);
    }

    public function cards() {
        $this->load->view('pages/cards.php');
    }

    public function buttons() {
        $this->load->view('pages/buttons.php');
    }

    public function color() {
        $this->load->view('pages/color.php');
    }

    public function border() {
        $this->load->view('pages/border.php');
    }

    public function animation() {
        $this->load->view('pages/animation.php');
    }

    public function other() {
        $this->load->view('pages/other.php');
    }
}