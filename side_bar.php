<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0; background-color:green;">
            <div class="navbar-header">
                <a class="navbar-brand" href="" style = "color:white; padding-left:25px;"><i class = "fa fa-home fa-large" > </i>HOME | OVS - Online Voting System</a>
				
            </div>
      

            <ul class="nav navbar-top-links navbar-right">
            
               <?php require 'admin/dbcon.php';
				$query = $conn->query("SELECT * from voters where voters_id ='$session_id'")or die (mysql_error ());
				
				while ($row = $query->fetch_array()){
				
				
			 ?>
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style = "color: white">
					<i>Welcome: <?php echo $user_username = $user_row['firstname']." ".$user_row['lastname'];?></i>
                    </a>                     
                </li>
            <li class="dropdown">
                <a href="logout.php"style = "color: white; padding-rignt: 30px;"> <i class = "fa fa-sign-out" style = "color: white"></i>Logout</a>
            </li>
           
            </ul>
			<?php }?>
        </nav>