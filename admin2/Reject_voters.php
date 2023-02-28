<?php 
require_once 'dbcon.php';
$voters_id = $_GET['voter_id'];
mysqli_query($conn, "DELETE FROM voters WHERE voters_id='$voters_id'")
?>
<script>
    window.location.href = 'voters_request.php'
</script>