<?php
	
	function conn() {
		// $conn = new mysqli("localhost:3306", "port7396_jngita", "gitafamily", "port7396_jngita");

		$conn = new mysqli("localhost", "root", "", "miniactivity");
	
		if(!$conn){
			die("Error: Cannot connect to the database");
		}
		return $conn;
	}

	
?>