<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/sms.css" media="all" />
</head>
<body>
<div id="main">
<?php
	if (isset($_POST['submit'])) {
		$username = "fayaz.valli95@gmail.com";
		$password = "sanhack";

		if (isset($_POST['numberext']) && isset($_POST['number'])
			&& isset($_POST['from']) && isset($_POST['message'])) {
			// get form data
			$number = $_POST['numberext'].$_POST['number'];
			$from = $_POST['from'];
			$message = $_POST['message'];

			$vars = "uname=".$username."&pword=".$password.
				"&message=".$message."&from=".$from.
				"&selectednums=".$number."&info=1&test=0";
			//echo $vars;

			$curl = curl_init('http://www.txtlocal.com/sendsmspost.php');
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $vars);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			$result = curl_exec($curl);
			curl_close($curl);

			echo "<p class='success'>SMS has been sent.</p>";
		}
	} else {
		echo "<p class='error'>All fields are required!</p>";
	}
?>

        <form action="sms-app.php" method="POST">
        <p>
            <label>Location:</label>
            <select class="select">
                <option>Arusha</option>
                <option>Dar es Salaam</option>
                <option>Dodoma</option>
                <option>Iringa</option>
                <option>Kagera</option>
                <option>Kigoma</option>
                <option>Kilimanjaro</option>
                <option>Lindi</option>
                <option>Manyara</option>
                <option>Mara</option>
                <option>Mbeya</option>
                <option>Morogoro</option>
                <option>Mtwara</option>
                <option>Mwanza</option>
                <option>Pwani [Coast]</option>
                <option>Rukwa</option>
                <option>Ruvuma</option>
                <option>Shinyanga</option>
                <option>Singida</option>
                <option>Tabora</option>
                <option>Tanga</option>
                <option>Zanzibar</option>
           </select>
        </p>
        <p>
            <label>Group:</label>
            <select class="select">
                <option>Agriculture</option>
                <option>Bussiness</option>
            </select>
        </p>
        <p>
            <label>Time Internval (Months):</label>
            <select class="select">
                <option>3</option>
                <option>6</option>
                <option>9</option>
            </select>
        </p>
        <p>
            <label>Number [if sending to one]:</label><br/>
            <input type="text" size="3" name="numberext" class="text" required /> - 
            <input type="text" name="number" class="text" required/>
        </p>
        <p>
            <label>Sender:</label><br />
            <input type="text" name="from" class="text2" required />
        </p>
        <p>
            <label>Message:</label><br />
            <textarea name="message" require></textarea>
            <input type="hidden" name="submitted" value="true" />
        </p>
        <p>
            <input type="submit" name="submit" value="Send" class="submit" /> 
        </p>
        </form>
   </div>
</body>
</html>