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

		public function add_movie($data)
		{
			$sql = "INSERT INTO `movie`(`movie_id`, `movie_title`, `movie_desc`, `movie_year`, `movie_rating`) VALUES ( ? , ? , ? , ? , ? )";
			$query = $this->db->query($sql, $data);
			return $query;
		}
	}

?>