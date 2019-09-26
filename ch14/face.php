<?php
define('APP_ID','');
define('APP_SECRET','');
// error_reporting(E_ALL ^ E_NOTICE);
require_once('./composer/vendor/facebook/graph-sdk/src/Facebook/Facebook.php');
require_once('./composer/vendor/facebook/graph-sdk/src/Facebook/FacebookApp.php');

//create facebook object
$facebook = new Facebook\Facebook(
   ['app_id'=> APP_ID,
   'app_secret'=> APP_SECRET,
   'default_graph_version'=>'v3.2']
);
$helper = $facebook->getRedirectLoginHelper();
$permissions = ['email'];
$loginUrl = $helper->getLoginUrl('http://localhost:8080/phpTest/ch14/indexTwo.php',$permissions);
echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';

//the login page is also the callback page, so we check if we have been authenticated
// $facebook_session = $facebook->getSession();
// if(!empty($facebook_session))
// {
//     try{
//         //API call for information about the logged in user
//         $user_info = $facebook->api('/me');
//         if(!empty($user_info))
//         {
//             displayUserInfo($user_info);
//         }
//         else{
//             echo"there was an Error!!!";
//         }
//     }catch(Exception $e)
//     {
//         print $e->getMessage();
//     }
// }else{
//     //try generating session by redirecting back to this page
//     $login_url = $facebook->getLoginUrl();
//     header("location :".$login_url);
        
// }
?>
 <?php
// function displayUserInfo($user_info)
// {
//     /* id, name, first_name, last_name, link, hometown,
//     location, bio, quotes, gender, timezone, locale
//     verified, updated_time */
//     echo "Welcome <a href='{$user_info['link']}' rel='external'/>".
//     $user_info['name'].'</a>!<br>';


// }
?>