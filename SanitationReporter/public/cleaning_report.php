<?php include("../includes/init.php"); ?>
<?php include("../includes/header.php"); ?>
<body data-spy="scroll">
<!-- MAIN CONTENT -->
<div class="container content container-fluid" id="home">

<?php include("../includes/navigation.php"); ?>
<div>
    <div>
    	<h1 id="heading">Staff Monitoring Report</h1>
        <div>
        <?php
        if (isset($_POST['report'])) {
          $fullname = $_POST['fullname'];
          $address = $_POST['address'];
          $comments = $_POST['comments'];
    			$file = $_FILES['image']['tmp_name'];
    			
          if ( $fullname=="" ) {
            $message = "Please enter all fields and select image.";
            text_validate($message, "error");
          }
          else {
            if (empty($_FILES['image']['tmp_name']) && empty($_FILES['image']['name'])) {
              $message = "Please select image.";
              text_validate($message, 'error');
            }
            else {
      				$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
      				$image_name = addslashes($_FILES['image']['name']);
      				$image_size = getimagesize($_FILES['image']['tmp_name']);
    				

      				if ($image_size==FALSE) {
      					$message = "Please select an image.";
      					echo text_validate($message, "error");	
      				} 
              else {
      					$query =  "INSERT INTO staff_monitoring_reports ";
                $query .= "VALUES ('','$image_name','$image', '$fullname', 
                  '$address', NOW(), '$comments')";

                $insert = mysql_query($query);
                if (!$insert) {
                  $message = "Problem uploading image.";
                  text_validate($message, "error");
                }
                else {
                  $lastid = mysql_insert_id();

                  $message = "Report saved successfully!";
                  text_validate($message, "success");
                }
              }
    				}
    			}
    		}
    		
    		?>
        </div>
       	
        <form action="#" enctype="multipart/form-data" method="post" class="form_graphics">
        <div class="center_form">
        <div id="form_left">
            <label for="upload">Upload Image:</label>
            <input type="file" class="input" name="image" />
          
            <label for="fullname">Fullname:</label>
            <input type="text" name="fullname" value="" />

            <label for="address">Address:</label> 
            <textarea name="address" rows="2"></textarea>

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