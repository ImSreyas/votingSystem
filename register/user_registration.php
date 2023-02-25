
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
                         		<center>User Registration</center>
                         		</div>
											<div class="form-field">
												<label>User name</label><br/>
												<input class ="form-control" type = "text" name = "username" placeholder = "user name" required="true">
											</div>
											
											<div class="form-field">											
												<label>Password</label><br/>
													<input class="form-control"  type = "password" name = "password" id = "pass" placeholder="Password" required="true"/>
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
												<label>Phone number</label><br/>
													<input class="form-control"  type = "phone" name = "phonenumber" placeholder="phone number" required="true">
											</div>
                                            <div class="form-field">
												<label>Email</label><br/>
													<input class="form-control"  type = "text" name = "email" placeholder="email" required="true">
											</div>

												<br/>					
											 	 <center><button name = "save" type="submit">Create My Account</button></center>
                                            <div class="link">
												<div>
													<a href="index.php">voter registration</a> 
												</div>
											 	 
											</div>

						  				 </div>
                                       
										
										</form>
								
							<?php //PHP script to insert signup data into database
								require 'signUpData_user.php';
								
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