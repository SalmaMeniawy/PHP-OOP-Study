<?php
function authenticate_user()
{
	header('WWW-Authenticate : Basic Realm = "Secret stach"');
	header("HTTP/1.1 401 Unathorized");
	exit;
}
if (!$_SERVER['PHP_AUTH_USER']) {
	authenticate_user();
}
else{
	$db = new mysqli("localhost","root","bigbigfamily","php-study");
	$stmt = $db->prepare("SELECT username ,pswd FROM Logins WHERE username=? AND pswd=? ");
	$stmt->bind_param('ss',$_SERVER['PHP_AUTH_USER'],password_hash($_SERVER['PHP_AUTH_PW'], PASSWORD_DEFAULT));
	$stmt->execute();
	$stmt->store_result();
	// Remember to check for erres also!
	if ($stmt->num_rows == 0)
	{
		authenticate_user();
	}
}

?>