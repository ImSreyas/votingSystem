<?php
	require_once 'dbcon.php';
	if (isset ($_POST ['change'])){
        $student_id_o = $_POST['student_id_o'];
		$student_id = $_POST['student_id'];
		$student_name = $_POST['student_name'];
		$conn->query("UPDATE ids SET id_number='$student_id', names='$student_name' WHERE id_number = '$student_id_o'")or die('error');
		?>
		<script type="text/javascript">
		alert('student updated')
		window.location = 'current_students.php';
		</script>
		<?php
	}
?>