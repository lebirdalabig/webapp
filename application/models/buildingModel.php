<?php
	class BuildingModel extends CI_Model {

		private $id;
		private $name;
		private $address;
		private $owner;

		public function get_all()
		{
			$query = $this->db->get('building');
            return $query->result();
		}
	}

?>