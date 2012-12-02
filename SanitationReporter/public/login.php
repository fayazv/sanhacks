<?php include("../includes/init.php"); ?>
<?php include("../includes/header.php"); ?>
<body data-spy="scroll">
<!-- MAIN CONTENT -->
<div class="container content container-fluid" id="home">

<?php include("../includes/navigation.php"); ?>
<div>
    <div>
    	<h1 id="heading">Login</h1>
      <div id="login">
          <form action="" method="post"> 
          <h1>Log in</h1> 
          <div id="msg">
          <?php
		  if(isset($_POST['Login'])) {
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);
			
			if($username=="admin" && $password=="admin123")
			{
				redirect_to("admin/admin.php");
			}
			else{
			}
		  }
          ?>          
          </div>
          <p> 
          <label for="username" class="uname" data-icon="u" >Username</label>
          <input id="username" name="username" type="text" value="" />
          </p>
          <p> 
          <label for="password" class="youpasswd" data-icon="p">Password</label>
          <input id="password" name="password" type="password" value="" /> 
          </p>
          <p class="login button"> 
          <input type="submit" value="Login" name="Login" /> 
          </p>
          </form>
      </div>   	
    </div>
</div>

</div>
<?php include("../includes/footer.php"); ?>