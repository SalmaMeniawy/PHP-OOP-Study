<?php
$_SERVER['PHP_AUTH_USER']="salma";
$_SERVER['PHP_AUTH_PW']="1234";
// header('WWW-Authenticate: Basic Realm="Book Projects"');
// header("HTTP/1.1 401 Unauthorized");
if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']))
{
	header('WWW-Authenticate: Basic Realm="Authentication"');
	header("HTTP/1.1 200 OK");

}
//if username and password are available 
else{
	echo "Your supplied username :{$_SERVER['PHP_AUTH_USER']}";
	echo "Your Password :{$_SERVER['PHP_AUTH_PW']}";
} 
?>