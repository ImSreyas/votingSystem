<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">         
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>Add Candidate</center>
						</div>    
					</div>
				</h4>
			</div>
										
										
            <div class="modal-body">
				<form method = "post" enctype = "multipart/form-data">	
					<div class="form-group">
						<label>Position</label>
						<select class = "form-control" name = "position">
								<option selected disabled>Select Candidate Group</option>
								<option>President</option>
								<option>Vice President</option>
								<option>Union Advisor</option>
								<option>Sports Secretary</option>
								<option>Entertainment Advisor</option>
								<option>Treasurer</option>
								<option>Secretary General</option>
								<option>Vice Treasurer</option>
								<option>Transport & Accommodation Secretary</option>
								<option>Publicity Secretary</option>
								<option>Academics Secretary</option>
							</select>
					</div>
					<div class="form-group">
						<label>Party Name</label>
							<input class="form-control" type ="text" name = "party" placeholder="Please enter party name" required="true">
					</div>

										
					<div class="form-group">
						<label>Firstname</label>
							<input class="form-control" type ="text" name = "firstname" placeholder="Please enter firstname" required="true">
					</div>
					<div class="form-group">
						<label>Lastname</label>
							<input class="form-control"  type = "text" name = "lastname" placeholder="Please enter lastname" required="true">
					</div>
											
					<div class="form-group">
						<label>Year_Level</label>
							<select class = "form-control" name = "year_level">
								<option></option>
								<option>1st Year</option>
								<option>2nd Year</option>
								<option>3rd Year</option>
								<option>4th Year</option>
							</select>
					</div>
															
					<div class="form-group">
						<label>Gender</label>
							<select class = "form-control" name = "gender">
								<option></option>
								<option>Male</option>
								<option>Female</option>
							</select>
					</div>
											
											
					<div class="form-group">
                        <label>Image</label>
						<input type="file" name="image"required> 
                    </div>
						<button name = "save" type="submit" class="btn btn-primary">Save Data</button>
				</form>  
			</div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
										
										
										
										
			<?php 
				require_once 'dbcon.php';
				
				if (isset ($_POST ['save'])){
					$position=$_POST['position'];					
					$party=$_POST['party'];
					$firstname=$_POST['firstname'];
					$lastname=$_POST['lastname'];
					$year_level=$_POST['year_level'];
					$gender=$_POST['gender'];
					$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
					$image_name= addslashes($_FILES['image']['name']);
					$image_size= getimagesize($_FILES['image']['tmp_name']);
		
					move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
					$location="upload/" . $_FILES["image"]["name"];
					
					
					$conn->query("INSERT INTO candidate(position,party,firstname,lastname,year_level,gender,img)values('$position','$party','$firstname','$lastname','$year_level','$gender','$location')")or die($conn->error);
				}						
			?>					
        </div>
                                   
<!-- /.modal-content -->
                                
	</div>
                               
<!-- /.modal-dialog -->
								
</div>