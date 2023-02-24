<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0; background-color:#0022ff;">
            <div class="navbar-header">
                <a class="navbar-brand" href="" style = "color:white;"><i class = "fa fa-home fa-large" > </i>HOME | Admin Portal</a>
				
            </div>
      

            <ul class="nav navbar-top-links navbar-right">
            
               <?php require 'dbcon.php';
				$query = $conn->query("SELECT * from users where user_id ='$session_id'")or die (mysql_error ());
				
				while ($row = $query->fetch_array()){
				
				
			 ?>
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style = "color: white">
					<i>Welcome: <?php echo $user_username = $user_row['firstname']." ".$user_row['lastname'];?></i>
                    </a>
                </li>
           
            </ul>
			<?php }?>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="#"><i class="fa fa-menu fa-fw"></i>Menu </a>
                        </li>
                        <li>
                            <a href="candidate.php"><i class = "fa fa-user fa-fw"></i> View Candidates</a>
                         
                        </li>
						<li>
                          <a href="voters.php"><i class = "fa fa-user fa-fw"></i> View Voters</a>
                        </li>
                        <li>
                          <a href="current_students.php"><i class = "fa fa-user fa-fw"></i>Students</a>
                        </li>
						
                        <li>
                            <a href="canvassing.php"><i class="fa fa-download fa-fw"></i>Election Reports</a>
                        </li>
                        <li>
                            <a href="user.php"> <i class = "fa fa-users" ></i> View User</a>
                        </li>
                        <li>
                           <a href="logout.php"> <i class = "fa fa-sign-out" ></i>Logout</a>
                        </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>