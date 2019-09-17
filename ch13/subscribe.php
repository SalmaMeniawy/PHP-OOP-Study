<?php
	if(isset($_POST['name']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		printf("Hi -- %s",$name);
		printf("<br>Address is %s  will soon be a spam-magnet! ",$email);
	}

?>