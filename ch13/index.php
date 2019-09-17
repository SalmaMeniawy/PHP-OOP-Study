<?php
	if(isset($_POST['name']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		print_f("Hi -- %s",$name);
		print_f("<br>Address is %s  will soon be a spam-magnet! ",$email)
	}

?>
<form action="subscribe.php" method="POST">
	<p>	
		Name : 
		<input type="text" name="name" id="name" size="20"
		maxlength="40">
	</p>
	<p>
		Address :
		<input type="email" name="email" id="email" size="20" maxlength="40">
	</p>
	<input type="submit" name="submit" id="submit" value="Go">
</form>