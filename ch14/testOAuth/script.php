<?php
// use Facebook\Facebook;
session_start();
require_once('./vendor/autoload.php');
use Facebook\FacebookApp;
// use spl_autoload_register ;
// use Facebook\Facebook;
$fb = new Facebook\Facebook([
    'app_id'=>'558331838239860',
    'app_secret'=>' e480f8703104c83ca2095a8efc7f7177',
    'default_graph_version'=>'v3.2'
]);
$helper = $fb->getRedirectLoginHelper();
// $permissions = ['email'];
$loginUrl = $helper->getLoginUrl('https://localhost/test.com/fb-callback.php');
echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';




?>