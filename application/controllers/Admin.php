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
        public function adminms($flag = 0)
        {
        	$this->load->model('movieModel');
        	$res = $this->movieModel->get_movie();
        	$data['rs'] = $res;
			$data['msg_code'] = $flag;
            $this->load->view('adminms', $data);
        }
		
		
		public function adminsc($flag = 0)
        {
        	$this->load->model('screeningModel');
        	$res = $this->screeningModel->get_screening();
        	$data['rs'] = $res;
			$data['msg_code'] = $flag;
            $this->load->view('adminsc', $data);
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
        	$this->load->model('movieModel');
			$form_data = array(
				'movie_id' => "",
				'movie_title' => $this->input->post("title"),
				'movie_desc' => $this->input->post("desc"),
				'movie_year' => $this->input->post("year"),
				'movie_rating' => $this->input->post("rating"),
				'movie_poster' => ""
			);
			//print_r($form_data);
			$res = $this->movieModel->addMovie($form_data);
			//echo $res;
			if($res){
				redirect(base_url('admin/adminms/5'),'refresh');
			}else{
				redirect(base_url('admin/adminms/6'),'refresh');
			}
        }
		
		public function deleteMovie($movie_id){
			//isloggedIN
			$this->load->model('movieModel');
			$res = $this->movieModel->deleteMovie($movie_id);
			if($res){
				redirect(base_url('admin/adminms/1'),'refresh');
			}else{
				redirect(base_url('admin/adminms/2'),'refresh');
			}
		}
		
		public function updateMovie(){
			//isloggedIN
			$this->load->model('movieModel');
			$form_data = array(
				'movie_id' => $this->input->post("movie_id"),
				'movie_title' => $this->input->post("movie_title"),
				'movie_desc' => $this->input->post("movie_desc"),
				'movie_year' => $this->input->post("movie_year"),
				'movie_rating' => $this->input->post("movie_rating"),
				'movie_poster' => ""
			);
			//print_r($form_data);
			$res = $this->movieModel->updateMovie($form_data);
			if($res){
				redirect(base_url('admin/adminms/3'),'refresh');
			}else{
				redirect(base_url('admin/adminms/4'),'refresh');
			}
			
		}
		
		public function addScreening()
        {
        	$this->load->model('screeningModel');
			$form_data = array(
				'screening_id' => "",
				'screening_date' => $this->input->post("date"),
				'screening_sched' => $this->input->post("sched"),
				'movie_id' => $this->input->post("m_id"),
				'cinema_id' => $this->input->post("c_id")
			);
			//print_r($form_data);
			$res = $this->screeningModel->addScreening($form_data);
			//echo $res;
			if($res){
				redirect(base_url('admin/adminsc/5'),'refresh');
			}else{
				redirect(base_url('admin/adminsc/6'),'refresh');
			}
        }
		
		public function deleteScreening($screening_id){
			//isloggedIN
			$this->load->model('screeningModel');
			$res = $this->screeningModel->deleteScreening($screening_id);
			if($res){
				redirect(base_url('admin/adminsc/1'),'refresh');
			}else{
				redirect(base_url('admin/adminsc/2'),'refresh');
			}
		}
		
		public function updateScreening(){
			//isloggedIN
			$this->load->model('screeningModel');
			$form_data = array(
				'screening_id' => $this->input->post("screening_id"),
				'screening_date' => $this->input->post("screening_date"),
				'screening_sched' => $this->input->post("screening_sched"),
				'movie_id' => $this->input->post("movie_id"),
				'cinema_id' => $this->input->post("cinema_id")
			);
			//print_r($form_data);
			$res = $this->screeningModel->updateScreening($form_data);
			if($res){
				redirect(base_url('admin/adminsc/3'),'refresh');
			}else{
				redirect(base_url('admin/adminsc/4'),'refresh');
			}
			
		}
}