<?php
class Admin extends CI_Controller {

        public function index()
        {
            $this->load->view('admin');
        }
        public function adminbc()
        {
        	$this->load->model('buildingModel');
        	$res = $this->buildingModel->get_all();
        	$data['rs'] = $res;
            $this->load->view('adminbc', $data);

        }
        public function adminms()
        {
            $this->load->view('admin/adminms');
        }
        public function adminut()
        {
            $this->load->view('admin/adminut');
        }
}