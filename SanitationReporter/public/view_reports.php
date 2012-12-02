<?php include("../includes/init.php"); ?>
<?php include("../includes/header.php"); ?>
<body data-spy="scroll">
<!-- MAIN CONTENT -->
<div class="container content container-fluid" id="home">

<?php include("../includes/navigation.php"); ?>
<div>
    <div>
    	<h1 id="heading">Report</h1>
        <div>
        <?php  
		$query =  "SELECT * FROM reports ";

        $result_set = $db->query($query);
    		?>
        </div>
       	
        <div class="CSSTableGenerator" >
        <table >
          <tr>
            <!-- <td>Image</td> -->
            <td>School Name</td>
            <td>Equipment</td>
            <td>Condition</td>
            <td>Gender</td>
            <td>Date &amp; Time</td>
            <td>Comments</td>
          </tr>
          <?php           
          while($row = mysql_fetch_row($result_set)){
              ?>
              <tr>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[3]; ?></td>
                <td><?php echo $row[4]; ?></td>
                <td><?php echo $row[5]; ?></td>
                <td><?php echo $row[6]; ?></td>
              </tr>

              <?php
            }

          ?>
        </table>
      </div>
                
    </div>
</div>

</div>
<?php include("../includes/footer.php"); ?>