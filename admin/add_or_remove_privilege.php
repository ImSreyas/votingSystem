<?php 
require 'dbcon.php';
$user_id = $_GET['user_id'];
if($conn->query("SELECT * FROM users WHERE user_id='$user_id' and privilege='1'")->num_rows == 1){
    mysqli_query($conn, "UPDATE users SET privilege='0' WHERE user_id='$user_id'") or die($conn->error);
} else {
    mysqli_query($conn, "UPDATE users SET privilege='1' WHERE user_id='$user_id'") or die($conn->error);
}
?>
<script>
    window.location.href = 'user.php'
</script>