
	<h1> Hello after enter Email and Password </h1>
	<?php 
		echo $_POST['email']."<br>";
		if  ($_POST['pswd']){
			echo "It is valid Password"."<br>";
		}
		echo $_POST['subscribe']."<br>";

	?>