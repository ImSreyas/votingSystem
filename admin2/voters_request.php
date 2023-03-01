<?php include ('session.php');?>
<?php include ('head.php');?>

<body>
    <div id="wrapper">

        <!-- Navigation -->
        <?php
        if(mysqli_query($conn, "select * from users where user_id='$session_id' and privilege='1'")->num_rows == 0){
            include ('side_bar.php');
        } else {
            include ('privilege_side_bar.php');
        }?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
				<hr/>
				
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">
													<div class="panel-heading"><i class = "fa fa-users"></i>
														Voters List
													</div>    
												</div>
											</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        
                                            <th>Student ID</th>
                                            <th>Names</th>
                                            <th>Gender</th>
                                            <th>Program of study</th>
                                            <th>Year Level</th>
                                            <!-- <th>Account</th>
                                            <th>Status</th> -->
                                            <th>Date Registered</th>
                                            <th>Accept/Reject</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            require 'dbcon.php';
                                            
                                            $query = $conn->query("SELECT * FROM voters WHERE accepted='0' ORDER BY voters_id DESC");
                                            while($row1 = $query->fetch_array()){
                                            $voters_id=$row1['voters_id'];
                                        ?>
                                      
                                            <tr style="color: <?php if($row1['banned'] == 0) echo 'green'; else echo 'red' ?>">
                                                <td><?php echo $row1 ['id_number'];?></td>
                                                <td><?php echo $row1 ['firstname']." ". $row1 ['lastname'];?></td>
                                                <td><?php echo $row1 ['gender'];?></td>
                                                <td><?php echo $row1['prog_study'];?></td>
                                                <td><?php echo $row1 ['year_level'];?></td>
                                                <td><?php echo $row1 ['date'];?></td>       
                                                <td style="text-align:center">
                                                    <a rel="tooltip" style="width:100%;margin-block-end:.5rem;"  title="Accept" id="<?php echo $voters_id ?>" href="Accept_voters.php?voter_id=<?php echo $voters_id; ?>" data-toggle="modal" class="btn btn-success btn-outline">Accept</a>	            
                                                    <a rel="tooltip" style="width:100%;margin-block-end:.5rem;"  title="Reject" id="<?php echo $voters_id ?>" href="Reject_voters.php?voter_id=<?php echo $voters_id; ?>" data-toggle="modal" class="btn btn-danger btn-outline">Reject</a>	            
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

