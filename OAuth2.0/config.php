<?php
    session_start();
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PSWD','bigbigfamily');
    define('DB_NAME','php-test');
    
    $clientID = '1044733286399-7n77coc95l8d2mt6llo07rf70ktdv6rp.apps.googleusercontent.com';
    $clientSecret = '7wJ8BuIRTq7RcaI_eJAhpkiH';
    // $redirectUri = 'http://localhost:8080/login/g-callback.php';
    $redirectUri='http://localhost:8080/g-callback.php';
    $appName = 'project-salamonty';

    require_once('./vendor/autoload.php');
    $client = new Google_Client();
    $client->setClientId($clientID);
    $client->setClientSecret($clientSecret);
    $client->setRedirectUri($redirectUri);
    $client->setApplicationName($appName);
    $client->addScope('https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email');

    $con =new mysqli(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
    if($con->connect_error)
    {
        die("Connection Faild : ".$con->connect_error);
    }
?>