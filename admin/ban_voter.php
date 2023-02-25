<?php 
	require_once 'dbcon.php';
    $id = $_GET['voter_id'];
    $result = $conn->query("SELECT banned FROM voters WHERE voters_id='$id'");
    $res = $result-> fetch_assoc();
    if ($res['banned'] == 1) {
        $conn->query("UPDATE voters SET banned='0' WHERE voters_id='$id'");
        $conn->query("UPDATE votes SET banned='0' WHERE voters_id='$id'");
    } else {
        $conn->query("UPDATE voters SET banned='1' WHERE voters_id='$id'");
        $conn->query("UPDATE votes SET banned='1' WHERE voters_id='$id'");
    }
	echo "<script> window.location='voters.php' </script>";
?>