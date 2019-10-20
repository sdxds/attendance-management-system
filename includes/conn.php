<?php
	$conn = new mysqli('localhost', 'root', '', 'ams');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>