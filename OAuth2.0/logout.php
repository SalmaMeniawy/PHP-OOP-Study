<?php
	require_once "config.php";
	unset($_SESSION['access_token']);
	$client->revokeToken();
	session_destroy();
	header('Location: login.php');
	exit();
?>