<?php
	if(!$bool){
?>
<div class="modal fade" id="edit_student<?php  echo $voters_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">         
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>Edit System User</center>
						</div>    
					</div>
				</h4>
			</div>
										
										
            <div class="modal-body">										
				<form action="update_student.php?student_id=<?php echo $voters_id; ?>" method = "post" >																					
                <input class="form-control" type ="hidden" name = "student_id_o" value = "<?php echo $row1['id_number']?>">
					<div class="form-group">
						<label>student id</label>
							<input class="form-control" type ="text" name = "student_id" value = "<?php echo $row1['id_number']?>">
					</div>
					<div class="form-group">
						<label>student name</label>
							<input class="form-control" type ="text" name = "student_name" value = "<?php echo $row1['names']?>">
					</div>
											
					<button name = "change" type="submit" class="btn btn-primary">Save Data</button>
				</form>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
				
		</div>					
	</div>
</div>
<?php
	}
?>
<!-- /.modal-content -->
                                
