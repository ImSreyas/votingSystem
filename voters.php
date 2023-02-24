<?php include ('head.php');?>

<body>
 <?php include ('view_banner.php');?>
<div class="col-lg-6">

     
    <center>
        <div class="voters_notice">
            <p><strong><i>NOTE</i>:</strong> if you did not registered for online voting, your name will not appear on list below and
            you can not vote using the online system.</p>
        </div>
        <strong><h3>Registered Voters List</h3></strong>

    </center>

 &nbsp;

                    <div class="tables-body">
                            <div class="table_back">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example" border="0">
                                    <thead class="thead">
                                        <tr>
                                         
                                            <th>Student ID</th>
                                            <th>Names</th>
                                            <th>Gender</th>
                                            <th>Program of Sstudy</th>
                                            <th>Year Level</th>
                                            <th>Account</th>
                                            <th>Status</th>
                                            <th>Date Registered</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php 
											require 'admin/dbcon.php';
											
											$query = $conn->query("SELECT * FROM voters ORDER BY voters_id DESC");
											while($row1 = $query->fetch_array()){
											$voters_id=$row1['voters_id'];
										?>
                                      
											<tr >
												<td><?php echo $row1 ['id_number'];?></td>
												<td><?php echo $row1 ['firstname']." ". $row1 ['lastname'];?></td>
                                                <td><?php echo $row1 ['gender'];?></td>
                                                <td><?php echo $row1['prog_study'];?></td>
												<td><?php echo $row1 ['year_level'];?></td>
                                                <td><?php echo $row1 ['account'];?></td>
												<td><?php echo $row1 ['status'];?></td>
												<td><?php echo $row1 ['date'];?></td>		
											</tr>
										
                                       <?php } ?>
                                    </tbody>
                                </table>

                             </div>
                    </div>
         

</div>                          
        <?php 
            include ('script.php');
        ?>                     
</body>
</html>