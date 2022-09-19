<?php
	
	function conn() {
		$conn = new mysqli("localhost", "root", "", "miniactivity");
	
		if(!$conn){
			die("Error: Cannot connect to the database");
		}
		return $conn;
	}

	
?>