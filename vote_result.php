<?php include ('head.php');?>
<?php include ('sess.php');?>

<body>
<?php include 'side_bar.php'; ?>
    <div id="row">
        <?php
			if(ISSET($_POST['submit']))
				{
					if(!ISSET($_POST['pres_id']))
					{
						$_SESSION['pres_id'] = "";
					}
					else
					{
						$_SESSION['pres_id'] = $_POST['pres_id'];
					}
					if(!ISSET($_POST['vp_id']))
					{
						$_SESSION['vp_id'] = "";
					}
					else
					{
						$_SESSION['vp_id'] = $_POST['vp_id'];
					}
					if(!ISSET($_POST['ua_id']))
					{
						$_SESSION['ua_id'] = "";
					}
					else
					{
						$_SESSION['ua_id'] = $_POST['ua_id'];
					}
					if(!ISSET($_POST['ss_id']))
					{
						$_SESSION['ss_id'] = "";
					}
					else
					{
						$_SESSION['ss_id'] = $_POST['ss_id'];
					}
					if(!ISSET($_POST['ea_id']))
					{
						$_SESSION['ea_id'] = "";
					}
					else
					{
						$_SESSION['ea_id'] = $_POST['ea_id'];
					}
					if(!ISSET($_POST['treasurer_id']))
					{
						$_SESSION['treasurer_id'] = "";
					}
					else
					{
						$_SESSION['treasurer_id'] = $_POST['treasurer_id'];
					}
					if(!ISSET($_POST['sg_id']))
					{
						$_SESSION['sg_id'] = "";
					}
					else
					{
						$_SESSION['sg_id'] = $_POST['sg_id'];
					}
					if(!ISSET($_POST['vtr_id']))
					{
						$_SESSION['vtr_id'] = "";
					}
					else
					{
						$_SESSION['vtr_id'] = $_POST['vtr_id'];
					}
					if(!ISSET($_POST['tas_id']))
					{
						$_SESSION['tas_id'] = "";
					}
					else
					{
						$_SESSION['tas_id'] = $_POST['tas_id'];
					}
					if(!ISSET($_POST['ps_id']))
					{
						$_SESSION['ps_id'] = "";
					}
					else
					{
						$_SESSION['ps_id'] = $_POST['ps_id'];
					}
					if(!ISSET($_POST['as_id']))
					{
						$_SESSION['as_id'] = "";
					}
					else
					{
						$_SESSION['as_id'] = $_POST['as_id'];
					}
				}
		?>
    </div>
			<center>
		  <div class="col-lg-8" style = "margin-left:25%; margin-right:25%;" >
		  <div class = "alert alert-info">
			<div class="panel-heading"><center>PRESIDENT</center></div>
			<br />
			<?php
				if(!$_SESSION['pres_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[pres_id]'")->fetch_array();
						
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-success" >
			<div class="panel-heading"><center>VICE PRESIDENT</center></div>
			<br />
			<?php
				if(!$_SESSION['vp_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[vp_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-info">
			<div class="panel-heading"><center>UNION ADVISOR</center></div>
			<br/>
			<?php
				if(!$_SESSION['ua_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[ua_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
				
			</div>
			<div class = "alert alert-success" >
			<div class="panel-heading"><center>SPORTS SECRETARY</center></div>
			<br />
			<?php
				if(!$_SESSION['ss_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[ss_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info">
			
			<div class="panel-heading"><center>ENTERTAINMENT ADVISOR</center></div>
			<br />
			<?php
				if(!$_SESSION['ea_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[ea_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-success">
			<div class="panel-heading"><center>TREASURER</center></div>
			<br />
			<?php
				if(!$_SESSION['treasurer_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[treasurer_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info" >
			<div class="panel-heading"><center>SECRETARY GENERAL</center></div>
			<br />
			<?php
				if(!$_SESSION['sg_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[sg_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			</div>
			<div class = "alert alert-success">
			<div class="panel-heading"><center>VICE TREASURER</center></div>
			<br />
			<?php
				if(!$_SESSION['vtr_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[vtr_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
				
			</div>
			<div class = "alert alert-info">
			<div class="panel-heading"><center>TRANSPORT & ACCOMMODATION SECRETARY</center></div>
			<br />
			<?php
				if(!$_SESSION['tas_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[tas_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-success">
			<div class="panel-heading"><center>PUBLICITY SECRETARY</center></div>
			<br />
			<?php
				if(!$_SESSION['ps_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[ps_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<div class = "alert alert-info">
			<div class="panel-heading"><center>ACADEMICS SECRETARY</center></div>
			<br />
			<?php
				if(!$_SESSION['as_id'])
					{
						
					}
				else
					{
						$fetch = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '$_SESSION[as_id]'")->fetch_array();
						echo $fetch['firstname']." ".$fetch['lastname']." "."<img src = 'admin/".$fetch['img']."' style = 'height:80px; width:80px; border-radius:500px;' />"; 
					}
			?>
			
			</div>
			<br />
			</div>
	</center>
                                    <div class="modal-body">
										<p><center>Are you sure you want to submit your Votes? </center></p>
                                    </div>
									
									<div class="modal-footer"><center>
								<a href = "submit_vote.php"><button type = "submit" class="btn btn-success"><i class="icon-check"></i>&nbsp;Yes</button></a>
								<a href = "vote.php"><button class="btn btn-danger" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Back</button></a>
									</center></div>
                                    <!-- /.modal-content -->
                                
                                <!-- /.modal-dialog -->
                            

</body>

<?php include ('script.php');
include ('footer.php');?>
</html>

