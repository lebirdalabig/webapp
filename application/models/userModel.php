<?php
	class UserModel extends CI_Model {

		private $id;
		private $username;
		private $password;
		private $fname;
		private $lname;
		private $bod;
		private $gender;
		private $civil;
		private $address;
		private $province;
		private $city;
		private $mobile;
		private $email;

		public function get_user()
		{
			$query = $this->db->get('user');
            return $query->result();
		}

		public function userExists($data)
		{
			$res = NULL;
			$query = $this->db->get_where('user', $data);
			$res = $query->result();
			print_r($res);
			return $res;
		}

		public function register($form_data)
		{
			return $this->db->insert('user', $form_data);
		}
	}

?>