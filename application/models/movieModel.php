<?php
	class MovieModel extends CI_Model {

		private $id;
		private $title;
		private $desc;
		private $year;
		private $rating;

		public function get_movie()
		{
			$query = $this->db->get('movie');
            return $query->result();
		}
	}

?>