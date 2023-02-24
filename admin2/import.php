<?php include ('session.php');?>

<?php

if (isset($_POST['submit'])) {
	require_once 'dbcon.php';
	
	if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
	}

	//Import uploaded file to Database
	$handle = fopen($_FILES['filename']['tmp_name'], "r");

	while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		$conn->query("INSERT into ids (id_number, names, started) values('$data[0]','$data[1]','$data[2]')");
		
		}

	fclose($handle);
	?>
	<script type="text/javascript">
	alert('Successfully imported a CSV file!');
	window.location = 'current_students.php';
	</script>

	<?php
}else{
	?>
	<script type="text/javascript">
	alert('Upload Failed!');
	window.location = 'current_students.php';
	</script>

	<?php

}

?>