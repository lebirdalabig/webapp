<?php
	class UserModel extends CI_Model {

		private $id;
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
	}

?>