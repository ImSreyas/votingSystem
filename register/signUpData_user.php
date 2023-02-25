<?php 
    require 'dbcon.php';
								
	if (isset($_POST['save'])){
		$username= $_POST['username'];
		$password = $_POST['password'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$phoneNumber = $_POST['phonenumber'];
		$email = $_POST['email'];

		$query = $conn->query("SELECT * FROM users WHERE username='$username'") or die ($conn->error);
		$count = $query->fetch_array();
	if ($count  < 1){
		$query1 = $conn->query("INSERT INTO users SET username='$username', password='$password', firstname='$firstname', lastname='$lastname', Phone='$phoneNumber', email='$email'") or die($conn->error);
		?> 
		<script>
			alert('successfully registered')
			window.location.href = '../admin2/index.php'
		</script>
		<?php
	} else {
		?> 
		<script>
			alert('user already exist')
			window.location.href = 'user_registration.php'
		</script>
		<?php
	}
}
?>