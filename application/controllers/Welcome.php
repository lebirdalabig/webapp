<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('movie_model');
		$res = $this->movie_model->get_last_ten_entries();
		$data['rs'] = $res;
		$this->load->view('header_guest');
		$this->load->view('index', $data);
		$this->load->view('footer_guest');
	}

	public function login()
	{
		if($_SERVER['REQUEST_METHOD'] === 'POST')
		{
			$data = array(
				'username' => $this->input->post('Username'),
				'password' => $this->input->post('Password') 
				);

			$this->load->model('userModel');
			$res = $this->userModel->userExists($data);
			if($res != NULL){
				$_SESSION['user_id'] = $res[0]->user_id;
				$_SESSION['username'] = $res[0]->username;
				$_SESSION['user_email'] = $res[0]->user_email;
				$_SESSION['user_type'] = $res[0]->user_type;
				if($_SESSION['user_type'] == 'Admin')
					{
						redirect('admin/index');
					}else{
						redirect('user/index');
					}
			}else{
				redirect('welcome/index');
				echo "you're logged out!";
			}
		}
	}

	public function faq()
	{
		$this->load->view('header_guest');
		$this->load->view('faq');
		$this->load->view('footer_guest');
	}

	public function genres()
	{
		$this->load->view('header_guest');
		$this->load->view('genres');
		$this->load->view('footer_guest');
	}

	public function horror()
	{
		$this->load->view('header_guest');
		$this->load->view('horror');
		$this->load->view('footer_guest');
	}

	public function comedy()
	{
		$this->load->view('header_guest');
		$this->load->view('comedy');
		$this->load->view('footer_guest');
	}

	public function contact()
	{
		$this->load->view('header_guest');
		$this->load->view('contact');
		$this->load->view('footer_guest');
	}

	public function icons()
	{
		$this->load->view('header_guest');
		$this->load->view('icons');
		$this->load->view('footer_guest');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome/index');
	}
}
	