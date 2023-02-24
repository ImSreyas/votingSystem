
<?php include ('head.php');?>
<body>

    <div id="wrapper">
    	<?php    
        include ('index_banner.php');
        ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
			
					<div class="form-panel">
                      
                        <div class="form-body"> 

                         <form method = "post" enctype = "multipart/form-data">
                         	
                                <div class="form-heading">
                         		<center>Voter Registeration</center>
                         		</div>
											<div class="form-field">
												<label>Student ID</label><br/>
												<input class ="form-control" type = "text" name = "id_number" placeholder = "Student ID" required="true">
													
											</div>
											
											<div class="form-field">											
												<label>Password</label><br/>
													<input class="form-control"  type = "password" name = "password" id = "pass" placeholder="Password" required="true"/>
											</div>
											<div class="form-field">											
												<label>Retyp Password</label><br/>
													<input class="form-control"  type = "password" name = "password1" id = "pass" placeholder="Retyp Password" required="true"/>
											</div>

											<div class="form-field">
												<label>First Name</label><br/>
													<input class="form-control" type ="text" name = "firstname" placeholder="First Name" required="true">
											</div>
											
											<div class="form-field">
												<label>Last Name</label><br/>
													<input class="form-control"  type = "text" name = "lastname" placeholder="Last Name" required="true">
											</div>

											<div class="form-field">
												<label>Gender</label> <br/>
													<select class = "form-control" name = "gender">
														<option >Male</option>
														<option >Female</option>														
													</select>
											</div>
											
											<div class="form-field">
												<label>Program of Study <i>(enter initials only i.e LLB,BFIN, BIT..)</i></label><br/>
													<input class="form-control"  type = "text" name = "prog_study" placeholder="E.g BIT, LLB,BFIN, BITED" required="true">
											</div>

											<div class="form-field">
												<label>Select Study Level</label> <br/>
													<select class = "form-control" name = "year_level">
														<option>1st Year</option>
														<option>2nd Year</option>
														<option>3rd Year</option>
														<option>4th Year</option>
														
													</select>
											</div>
												<br/>					
											 	 <center><button name = "save" type="submit">Create My Account</button></center>
                                            <div class="link">
											 	 <h2><center><a href="../login.php" style = "font-size:16px;">Login to vote</a></center></h2>
											</div>

						  				 </div>
                                       
										
										</form>
								
							<?php //PHP script to insert signup data into database
								require 'signUpData.php';
								
							?>

						</div>
						    
					</form>
					
                    </div>
                </div>
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
        <?php 
        include ('footer.php');
        ?>

    </div>
    <!-- /#wrapper -->
</body>

</html>

