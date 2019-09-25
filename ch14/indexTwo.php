<?php
$password = 'secret';
$hash1 = password_hash($password , PASSWORD_DEFAULT);
$hash2= password_hash($password , PASSWORD_DEFAULT);
$hash3 = password_hash($password , PASSWORD_DEFAULT);
$hash4= password_hash($password , PASSWORD_DEFAULT);
echo password_verify($password , $hash1); //return True
echo password_verify($password , $hash2);
$id = hash('sha1',uniqid(rand(),1));
$rand  = rand();
echo "$id"."<br>";
echo $rand;

?>