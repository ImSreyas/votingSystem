<?php include ('head.php');?>
<body>
    <?php include ('index_banner.php');?>

    <div class="container">
        <div class="row">
           
                <div class="menue">
                    
            </div>
            &nbsp;&nbsp;&nbsp;
            <div class="col-md-4 col-md-offset-4">
			
                <div class="login-panel"><!-- has form in it-->
				
                    
                    <div class="form-panel"><center>
                        <i>Login As:</i>
                        <select onchange = "page(this.value)">
                            <option value = "admin/index.php">System Admin</option>
                            <option value = "admin2/index.php">System User</option>
                            <option selected disables>Student Voter</option> 
                        </select>
                        <p/>
                    </center>
                        <form role="form" method = "post" enctype = "multipart/form-data" class="index-form">
                            <div class="form-heading">
                            <center>Student Login</center>
                            </div>
                            
                                
                                <div class="form-field">
									<label for = "username">Student ID: </label><br/>
										<input class="form-control" placeholder="Enter Student ID" name="idno" type="text" required = "required" autofocus>
                                </div>
								
                                <div class="form-field">
									<label for = "username" >Password: </label>
										<input class="form-control" placeholder="Enter Password" name="password" type="password" required = "required">
                                </div>
                             <br/>
                                <center><button class="btn btn-lg btn-success btn-block " name = "login" style= " margin-bottom:0px;" width="50">Login</button>
                                &nbsp; 
                            <a  href="register/index.php"><button type="button" class="btn btn-lg btn-success btn-block" data-dismiss="modal" style= " margin-bottom:0px;">Register</button></a>
            
                                &nbsp;

                                <?php include ('login_query.php');
                                
                                ?>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

  <?php include ('script.php');?>

  <script type="text/javascript">
  function page (src) {
    window.location = src;
  }
  </script>
    <?php    
        include ('footer.php');
    ?>

</body>

</html>
