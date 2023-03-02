<?php include ('head.php');?>

<body>
<?php include ('index_banner.php');?>
    <div class="container">
        <div class="row">
		
                    <center> 
                        <i>Login As:</i>
                        <select onchange = "page(this.value)">
                            <option  value = "../admin/index.php">System Admin</option>
                            <option  selected disables>System User</option>
                            <option value = "../login.php">Student Voter</option> 
                    </select>
                        
                    </center>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">

                    
                    <div class="form-heading">
                        <center>Admin Log in</center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
							
                                <div class="form-group">
									<label for = "username" >Username</label>
										<input class="form-control" placeholder="Enter Username" name="username" type="text" autofocus>
                                </div>
								
                                <div class="form-group">
									<label for = "username" >Password</label>
										<input class="form-control" placeholder="Enter Password" name="password" type="password" value="">
                                </div>
                             
                              
                                <button type="submit" style="margin-bottom: 1.5rem" class="btn btn-lg btn-success btn-block " name = "login">Login</button>
                                <a href="../register/user_registration.php" style="color: white; width: 100%;display: block;padding: 1rem;background-color: #439A97;text-align: center;border-radius: .5rem; font-size: 1.6rem">
                                Register
                                </a>
									<?php include ('login_query.php');?>
                        </form>
                    </div>
                </div>
            </div>
			
			 </div>
        </div>
    </div>
    <script type="text/javascript">
  function page (src) {
    window.location = src;
  }
  </script>

  <?php 
  include ('script.php');
  include ('footer.php');
  ?>

</body>

</html>
