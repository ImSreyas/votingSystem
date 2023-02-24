<?php
	$conn = new mysqli('localhost', 'root', '', 'vote');
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>	