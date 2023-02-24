<?php
	require_once 'admin/dbcon.php';
	
	if(isset($_POST['login'])){
		$idno=$_POST['idno'];
		$password=$_POST['password'];
	
		$result = $conn->query("SELECT * FROM voters WHERE id_number = '$idno' && password = '".md5($password)."' && `account` = 'active' && `status` = 'Unvoted'") or die(mysqli_errno());
		$row = $result->fetch_array();
		$voted = $conn->query("SELECT * FROM `voters` WHERE id_number = '$idno' && password = '".md5($password)."' && `status` = 'Voted'")->num_rows;
		$numberOfRows = $result->num_rows;				
		
		
		if ($numberOfRows > 0){
			session_start();
			$_SESSION['voters_id'] = $row['voters_id'];
			header('location:vote.php');
		}
		

		if($voted == 1){
			?>
			<script type="text/javascript">
			alert('Sorry You Already Voted')
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
			alert('Your account is not Actived')
			</script>
			<?php
		}
	
	}
?>