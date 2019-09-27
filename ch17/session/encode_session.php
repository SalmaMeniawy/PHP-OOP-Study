<?php
session_start();
//set some session variables
$_SESSION['username']='ALi';
$_SESSION['loggedon']= date('M d Y H:i:s');

//encode all session variables
$session_vars = session_encode();
print $session_vars."<br>";
print strlen($session_vars);

$my_session_vars = session_decode($session_vars); //it return true or fulse
var_dump($session_vars);
echo strlen($session_vars);
echo $_SESSION['username'];
// var_dump($my_session_vars);
echo "\n";
echo session_id()."<br>";
session_regenerate_id();
echo session_id()."<br>";

?>