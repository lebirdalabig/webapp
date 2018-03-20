<?php
class Users extends CI_Controller {

         public function index()
        {
            if($this->isLoggedIn()){
                $this->load->model('movie_model');
                $res = $this->movie_model->get_last_ten_entries();
                $data['rs'] = $res;
                $this->load->view('index',$data);
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

        public function movies($off = 0){
            $this->load->model('movie_model');

            $config['base_url'] = base_url('/users/movies');
            $config['total_rows'] = $this->movie_model->getMovieCount();
            $config['per_page'] = 10;

            echo $config['total_rows'];

            $this->pagination->initialize($config);

            $data['res'] = $this->movie_model->getMovies($config['per_page'],$off);
            $this->load->view('header');
            $this->load->view('displayMovies',$data);
            $this->load->view('footer');
        }

        public function logout()
        {
            $this->session->sess_destroy();
            redirect('welcome/index');
        }
}