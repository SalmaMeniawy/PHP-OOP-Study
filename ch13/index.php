<?php
	if(isset($_POST['name']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		print_f("Hi -- %s",$name);
		print_f("<br>Address is %s  will soon be a spam-magnet! ",$email)
	}

?>