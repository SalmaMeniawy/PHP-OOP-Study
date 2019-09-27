<?php
session_start();
//set some session variables
$_SESSION['username']='ALi';
$_SESSION['loggedon']= date('M d Y H:i:s');

//encode all session variables
$session_vars = session_encode();
print $session_vars."<br>";
print strlen($session_vars);

?>