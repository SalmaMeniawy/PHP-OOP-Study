<?php
function authenticate_user()
{
	header('WWW-Authenticate : Basic Realm = "Secret stach"');
	header("HTTP/1.1 401 Unathorized");
	exit;
}

?>