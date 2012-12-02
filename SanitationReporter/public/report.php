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
        if (isset($_POST['report'])) {
          $sname = $_POST['sname'];
          $equipment = $_POST['equipment'];
          $condition = $_POST['condition'];
          $gender = $_POST['toilet_gender'];
          $comments = $_POST['comments'];
    			
          if ( $sname=="" ) {
            $message = "Please enter all fields.";
            text_validate($message, "error");
          }
          else {            
      		
				$query =  "INSERT INTO reports ";
                $query .= "VALUES ('','$sname', '$equipment', '$condition', '$gender', NOW(), '$comments')";
				
				//echo $query;

                $insert = mysql_query($query);
				if (!$insert) {
				  $message = "Problem saving information.";
				  text_validate($message, "error");
				}
				else {
				  $message = "Report saved successfully!";
				  text_validate($message, "success");
				}
          }
    	}
    		
			?>
        </div>
       	
        <form action="#" enctype="multipart/form-data" method="post" class="form_graphics">
        <div class="center_form">
        <div id="form_left">
          
            <label for="schoolname">School Name:</label>
            <input type="text" name="sname" value="" />

            <label for="equipment">Equipment:</label> 
            <select id="equipment" name="equipment">      
            <option value="Toilet">Toilet</option>
            <option value="Shink">Shink</option>
            </select>
            
            <label for="condition">Condition:</label> 
            <select id="condition" name="condition">      
            <option value="Dirty">Dirty</option>
            <option value="Broken">Broken</option>
            <option value="Licking">Licking</option>
            </select>
             
            <label for="toilet">Toilet Gender:</label> 
            <select id="toilet_gender" name="toilet_gender">      
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            </select>

          <label for="comments">Comments:</label> 
          <textarea name="comments" rows="3"></textarea>

          </table>
          <input type="submit" value="REPORT" name="report" class="submit" />
        </div>
        <div id="form_right"> 
            <!-- Image comes from php -->
        </div>
        </div>
        </form>
    </div>
</div>

</div>
<?php include("../includes/footer.php"); ?>