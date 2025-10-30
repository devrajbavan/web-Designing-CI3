<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charts extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin/Dashboard_model');
    }

    public function index() {
        $data['title'] = 'Charts';
        $data['chart_data'] = $this->Dashboard_model->get_chart_data();
        $data['content_view'] = 'pages/charts';
        $this->load->view('templates/admin/main', $data);
    }
}
