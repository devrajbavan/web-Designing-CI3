<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tables extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin/Table_model');
    }

    public function index() {
        $data['title'] = 'Tables';
        $data['user'] = $this->Table_model->get_users();
        $data['content_view'] = 'pages/tables';
        $this->load->view('templates/admin/main', $data);
    }
}
