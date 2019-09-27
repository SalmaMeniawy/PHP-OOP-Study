<?php
    $name = "salma";
    $age = 23;
   //send cookie by function setcookie and take name and value
   setcookie('cookieName','this is the cookie value');
   setcookie($name ,$age);
   echo"Hello";
   //to delete cookie
   setcookie('cookieName',FALSE); //first way
   setcookie($name,''); //the secound way


?>