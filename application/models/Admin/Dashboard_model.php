<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {
    public function get_stats(){
        $this->load->model('Admin_model');
        $admin_count = count($this->Admin_model->get_all());
        // example placeholder metrics
        return [
            'admin_count' => (int)$admin_count,
            'widgets' => [
                'Active' => 12,
                'Pending' => 3,
                'Alerts' => 5
            ]
        ];
    }

    public function get_chart_data(){
        // Monthly count example (static fallback)
        $labels = [];
        $data = [];
        $now = new DateTime();
        for ($i=5; $i>=0; $i--){
            $m = $now->modify("-$i month")->format('Y-m');
            $labels[] = $m;
            $data[] = rand(0,50); // placeholder — replace with real data if you have it
        }
        return ['labels'=>$labels,'data'=>$data];
    }
}
