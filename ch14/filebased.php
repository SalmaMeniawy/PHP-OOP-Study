<?php
	$authorized = false;
	if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']))
	{
		//read the authentication file as array
		$authFile = file("/usr/local/lib/php/site/authenticate.txt");
		//search for the user
		foreach($authFile as $line)
		{
			list($user , $hash) = explode(":", $line);
			if($_SERVER['PHP_AUTH_USER'] == $user && 
			password_verify($_SERVER['PHP_AUTH_PW'], trim($hash)))
			{
				$authorized = True;
				break;
			}
		}

	}
	// If not authorized, display authentication prompt or 401 error
	// if(!$_SERVER['HTTPS'])
	// {

	// 	echo "please use HTTPs when use this document ";
	// 	exit;
	// }
	if(!$authorized)
	{
		header('WWW-Authenticate : Basic Realm="Secret Stach"');
		header('HTTP/1.1 401 Unauthorized');
		print('You must provide the proper credentials!');
		exit;
	}

?>