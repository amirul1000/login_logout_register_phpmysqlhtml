<?php
	////mysql datbase connection
	$servername = "localhost";
	$username = "root";
	$password = "secret";
	$db = "loglin_logout_register";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password,$db);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
?>	