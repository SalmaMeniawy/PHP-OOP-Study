<?php
define('APP_ID','');
define('APP_SECRET','');
session_start();
require_once('./composer/vendor/facebook/graph-sdk/src/Facebook/Facebook.php');
$fb = new Facebook\Facebook([
    'app_id'=>'',
    'app_secret'=>'',
    'default_graph_version'=>'v3.2'
]);
$helper = $fb->getRedirectLoginHelper();
$loginUrl = $helper->getLoginUrl('http://localhost:8080/phpTest/ch14/fb-callback.php');
echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';


?>