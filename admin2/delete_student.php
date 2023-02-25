<?php
	require_once 'dbcon.php';
	$student_id=$_GET['student_id'];
	$conn->query("DELETE FROM ids WHERE id_number='$student_id'") or die($conn->error);
	header('location:current_students.php');
?>