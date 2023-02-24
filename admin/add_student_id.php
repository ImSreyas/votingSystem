<?php include ('session.php');?>
<?php include ('head.php');?>


<?php
	require_once 'dbcon.php';
	if (isset ($_POST ['add'])){
		$id_number =$_POST['id_number'];
		$names =$_POST['names'];
		$started = $_POST['started'];

		$query = $conn->query("SELECT * FROM ids WHERE id_number='$id_number'") or die ($conn->error);
			$count = $query->fetch_array();
		if ($count  > 0){
?>
		<script>
			alert( 'Student ID already in Database');
			window.location='current_students.php';
	</script>	
<?php
	}
	else{
			$conn->query("insert into ids(id_number, names, started) VALUES('$id_number', '$names', '$started')");
?>
	<script>
			alert( 'Successfully Added');
			window.location='current_students.php';
	</script>
<?php
	}
} 
?>


    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">         
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>Enter Student ID</center>
						</div>    
					</div>
				</h4>
			</div>

<div class="modal-body">										
				<form action="" method = "post" >	
					<input type="hidden" name="user_id" value="<?php echo $row['user_id'] ?>">
																				
					<div class="form-group">
						<label>Student ID</label>
							<input class="form-control" type ="text" name = "id_number" required="true">
					</div>
					<div class="form-group">
						<label>Full Names</label>
							<input class="form-control" type ="text" name = "names" required="true">
					</div>
					<div class="form-group">
						<label>Year First Registered</label>
							<input class="form-control" type ="date" name = "started" required="true">
					</div>
											
					<button name = "add" type="submit" class="btn btn-primary">Add to Database</button>
				</form>
			</div>
            <div class="modal-footer">
                <a  href = "current_students.php"><button type="button" class="btn btn-default" data-dismiss="modal">Back</button></a>
            </div>
				
		</div>					
	</div>
</div>