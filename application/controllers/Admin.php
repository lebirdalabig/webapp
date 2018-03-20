<?php
class Admin extends CI_Controller {

        public function index()
        {
            if($this->isLoggedIn()){
                $this->load->view('admin');
            }
        }

        public function isLoggedIn(){
            $flag = false;
            if(isset($_SESSION['user_id'])){
                $flag = true;
            }else{
                redirect('welcome/index');
            }
            return $flag;
        }

        public function logout()
        {
            $this->session->sess_destroy();
            redirect('welcome/index');
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
			$this->load->model('userModel');
        	$res = $this->userModel->get_user();
        	$data['rs'] = $res;
            $this->load->view('adminut');
        }

        public function addMovie()
        {
        	if($_SERVER['REQUEST_METHOD']==="POST"){
                $this->load->model('movieModel');
                $data = array(
                                'id' => '',
                                'title'  => $this->input->post('title'),
                                'desc'  => $this->input->post('desc'),
                                'year'  => $this->input->post('year'),
                                'rating'  => $this->input->post('rating')
                                );

                if($this->movieModel->add_movie($data)>0){
                       $this->load->model('movieModel');
                        $res = $this->movieModel->get_movie();
                        $data['rs'] = $res;
                        $this->load->view('adminms', $data);
                        echo "<script type='javascript'>";
                        echo "alert('MOVIE SUCESSFULLY ADDED')";
                        echo "</script>";
                }
            }
        }
}