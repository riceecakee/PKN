<?php

	$conn = new mysqli("localhost", "root", "", "db_connect");

	if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}

?>