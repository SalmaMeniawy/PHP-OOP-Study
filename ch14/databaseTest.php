<?php
const HOST_NAME = "localhost";
const USER_NAME = "root";
const USER_PASSWORD = "bigbigfamily";
const DATABASE = "php-study";

//create connection 
$db = new mysqli(HOST_NAME,USER_NAME ,USER_PASSWORD ,DATABASE);

//check connection
if($db->connect_error)
{
    die("Connection field".$db->connect_error);
}

//prepare and bind if connection good
$stmt = $db->prepare("INSERT INTO Logins (username , pswd) VALUES (?,?) ");
// echo "$stmt";


$stmt->bind_param("ss",$username,$pswd);
$username = "salamonty";
$pswd = "qwerty11";

$stmt->execute();
$stmt->close();
$db->close();

?>