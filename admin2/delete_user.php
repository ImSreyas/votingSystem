<?php
	require_once 'dbcon.php';
	$user_id=$_GET['user_id'];
	$conn->query("DELETE FROM users WHERE user_id='$user_id'") or die($conn->error);
	header('location:user.php');
?>