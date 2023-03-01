
<?php include ('session.php');?>
<?php include ('head.php');?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">System User List</h3>
					
                </div>
				
				<button class="btn btn-success" data-toggle="modal" data-target="#add_user">Add User</button>
				<?php include ('add_user_modal.php');?>
                <!-- /.col-lg-12 -->
			
				
				<hr/>
				
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">
													<div class="panel-heading">
														Systm User List
													</div>    
												</div>
											</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                         
                                            <th>Username</th>
                                            <th>Firstname</th>
                                            <th>Lastname</th>  
                                            <th>Contact</th>
                                            <th>E-Mail</th>                                          
                                            <th>Action</th>
                                            <th>Privilege</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
                                        <?php 
										require 'dbcon.php';
										$bool = false;
										$query = $conn->query("SELECT * FROM users ORDER BY user_id DESC");
										while($row = $query->fetch_array()){
                                            $user_id=$row['user_id'];
                                        $privilege = $row['privilege'];
										?>
                                        <tr>
											
											<td style="background-color: <?php if($privilege == 0) echo 'transparent'; else echo 'yellow' ?>"><?php echo $row ['username'];?></td>
                                            <td><?php echo $row ['firstname'];?></td>
                                            <td><?php echo $row ['lastname'];?></td>
                                            <td><?php echo $row ['Phone']; ?></td>
                                            <td><?php echo $row ['email']; ?></td>
                                            <td style="text-align:center">
											
												 <a rel="tooltip"  title="Delete" id="<?php echo $row['user_id'] ?>" href="#delete_admin<?php echo $row['user_id']; ?>" data-toggle="modal"class="btn btn-danger btn-outline"><i class="fa fa-trash-o"></i> Delete</a>	
											 <?php include ('delete_user_modal.php'); ?>
												  <a rel="tooltip"  title="Edit" id="<?php echo $row['user_id'] ?>" href="#edit_user<?php echo $row['user_id'] ?>"  data-toggle="modal"class="btn btn-success btn-outline"><i class="fa fa-pencil"></i> Edit</a>	
		
											</td>
											    <?php include ('edit_user_modal.php');?>
                                                <td style="text-align:center">
												 <a rel="tooltip" style="width: 10rem" title="add/remove privilege" id="<?php echo $row['user_id'] ?>" href="add_or_remove_privilege.php?user_id=<?php echo $row['user_id']; ?>" data-toggle="modal"class="btn <?php if($privilege == 0) echo 'btn-success'; else echo 'btn-danger' ?> btn-outline"> <?php if($privilege == 0) echo 'Add'; else echo 'Remove' ?></a>	
											</td>
                                        </tr>
										
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
              
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->

    <?php include ('script.php');?>

</body>

</html>

