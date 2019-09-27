<?php
    session_start();
    define('TITLE', 'Welcome to the J.D. Salinger Fan Club!');
    include("templates/header.html");
    //greeting
    print "<h2>Welcome to the J.D. Salinger Fan Club! </h2>";
    print "hello !!".$_SESSION['email']." ".$_SESSION['password']."\n";


?>