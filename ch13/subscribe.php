<?php
$userInput = "I am going to hax0r your site, hahaha!
	<script type='text/javascript'>
	window.location = 'http://www.example.com/'
	</script>'";

$userInputEntities = htmlentities($userInput);
echo "$userInputEntities<br>";

?>