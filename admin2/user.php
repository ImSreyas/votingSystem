
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
                    <h3 class="page-header">System Uset List</h3><p>
					
                </div>
                <!-- /.col-lg-12 -->
			
				
				<hr/><br clear= all></p>
				
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
                                        </tr>
                                    </thead>
                                    <tbody>
									
                                        <tr>
										<?php 
										require 'dbcon.php';
										$bool = false;
										$query = $conn->query("SELECT * FROM users ORDER BY user_id DESC");
										while($row = $query->fetch_array()){
										$user_id=$row['user_id'];
										?>
											
											<td><?php echo $row ['username'];?></td>
                                            <td><?php echo $row ['firstname'];?></td>
                                            <td><?php echo $row ['lastname'];?></td>
                                            <td><?php echo $row ['Phone']; ?></td>
                                            <td><?php echo $row ['email']; ?></td>
                                            
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

