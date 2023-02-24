
<?php include ('head.php');?>

<body>

    <div id="wrapper">

      
              <?php include ('view_banner.php');?>
       
        <div id="page-wrapper">

    <heading class="menue-select">
            <center>
                <select onchange = "page(this.value)">
                <option disabled selected>Select Candidate Group</option>
                <option value = "candidates/pres.php">President</option>
                <option value = "candidates/vp.php">Vice President</option>
                <option value = "candidates/ua.php">Union Advisor</option>
                <option value = "candidates/ss.php">Sports Secretary</option>
                <option value = "candidates/ea.php">Entertainment Advisor</option>
                <option value = "candidates/tr.php">Treasurer</option>
                <option value = "candidates/vtr.php">Vice Treasurer</option>
                <option value = "candidates/sg.php">Secretary General</option>
                <option value = "candidates/ta.php">Transport & Accommodation</option>
                <option value = "candidates/pb.php">Publicity</option>
                <option value = "candidates/ac.php">Academics</option>
                </select>
            </center>

    </heading> 
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php    
        include ('footer.php');
        ?>

    <script>
    function page (src){
        window.location=src;
    }
    </script>

</body>

</html>

