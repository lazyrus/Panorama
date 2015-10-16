<?php

	class Dbase {
		private $host, $user, $passwd, $db;

		public function __construct( $db = "test_panorama" ){
			$this->host = "localhost";
			$this->user = "root";
			$this->passwd = "abcde";
			$this->db = $db;
			// $this->db = "test";
		}

		public function fetchQueryResult( $query ){
			$conn = new mysqli( $this->host, $this->user, $this->passwd, $this->db );
			$res = $conn->query( $query );

			return $res;
		}
	}
?>