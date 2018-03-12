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
        	$this->load->model('movieModel');
        	$res = $this->movieModel->get_movie();
        	$data['rs'] = $res;
            $this->load->view('adminms', $data);
        }
        public function adminut()
        {
            $this->load->view('adminut');
        }

        public function addMovie()
        {
        	print_r($_POST);
        }
}