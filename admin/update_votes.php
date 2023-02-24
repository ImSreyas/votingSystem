<?php
include ('dbcon.php');
if (isset ($_POST ['done'])){
$voters_id = $_GET['voter_id'];
$id_number=$_POST['id_number'];
$password=$_POST['password'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$year_level=$_POST['year_level'];
$account=$_POST['account'];
mysql_query ("UPDATE voters SET id_number = '$id_number', password = '$password', firstname = '$firstname', lastname = '$lastname', year_level = '$year_level', 
account = '$account' WHERE voters_id = '$voters_id'")or die($conn->error);
}
header("location: voters.php");
?>