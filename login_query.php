<?php
	require_once 'admin/dbcon.php';
		
	if(isset($_POST['login'])){
		$idno=$_POST['idno'];
		$password=$_POST['password'];
	
		$result = $conn->query("SELECT * FROM voters WHERE id_number = '$idno' && password = '".md5($password)."' && `account` = 'active' && `status` = 'Unvoted' && `accepted`='1'") or die(mysqli_error($conn));
		$row = $result->fetch_array();
		$voted = $conn->query("SELECT * FROM `voters` WHERE id_number = '$idno' && password = '".md5($password)."' && `status` = 'Voted'")->num_rows;
		$request = $conn->query("SELECT * FROM `voters` WHERE id_number = '$idno' && password = '".md5($password)."' && `accepted` = '1'")->num_rows;
		$numberOfRows = $result->num_rows;				
		
		if ($numberOfRows > 0){
			$_SESSION['voters_id'] = $row['voters_id'];
			?>
			<script>
				window.location.href = 'vote.php'
			</script>
			<?php
		}	
		else if($request == 0){
			?>
			<script type="text/javascript">
			alert('you are under verification. The administrator needs to accept your request.')
			</script>
			<?php
		}else if($voted == 1){
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