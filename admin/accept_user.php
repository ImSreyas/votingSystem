<?php 
require 'dbcon.php';
$user_id = $_GET['user_id'];
mysqli_query($conn, "UPDATE users SET accepted='1' WHERE user_id='$user_id'") or die($conn->error);
?>
<script>
    window.location.href = 'user_request.php'
</script>