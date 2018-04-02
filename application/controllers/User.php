<?php
class User extends CI_Controller {

         public function index()
        {
            if($this->isLoggedIn()){
                $this->load->model('movie_model');
                $res = $this->movie_model->get_last_ten_entries();
                $data['rs'] = $res;
                $this->load->view('header');
                $this->load->view('user',$data);
                $this->load->view('footer');
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

            $this->pagination->initialize($config);

            $data['res'] = $this->movie_model->getMovies($config['per_page'],$off);
            $this->load->view('header');
            $this->load->view('displayMovies',$data);
            $this->load->view('footer');
        }

        public function register()
        {
            $this->load->model('userModel');
            $form_data = array(
                'user_id' => "",
                'username' => $this->input->post("username"),
                'password' => $this->input->post("Password"),
                'user_fname' => $this->input->post("fName"),
                'user_lname' => $this->input->post("lName"),
                'user_bod' => "",
                'user_gender' => "",
                'user_civil' => "",
                'user_address' => "",
                'user_province' => "",
                'user_city' => "",
                'user_mobile' => $this->input->post("Phone"),
                'user_email' => $this->input->post("email"),
                'user_type' => "Customer"
            );
            //print_r($form_data);
            $res = $this->userModel->register($form_data);
            //echo $res;
                redirect(base_url('welcome/index'),'refresh');
        }

        public function logout()
        {
            $this->session->sess_destroy();
            redirect('welcome/index');
        }

        public function genres()
        {
            $this->load->view('header');
            $this->load->view('genres');
            $this->load->view('footer');
        }

        public function horror()
        {
            $this->load->view('header');
            $this->load->view('horror');
            $this->load->view('footer');
        }

        public function comedy()
        {
            $this->load->view('header');
            $this->load->view('comedy');
            $this->load->view('footer');
        }

        public function contact()
        {
            $this->load->view('header');
            $this->load->view('contact');
            $this->load->view('footer');
        }

        public function snacks()
        {
            $this->load->view('header');
            $this->load->view('snacks');
            $this->load->view('footer');
        }
}