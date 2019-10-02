<?php
    session_start();
    //include Google API Libaray
    require_once('./composer/vendor/autoload.php');
    //set the config params for google API
    $client_id = '1044733286399-7n77coc95l8d2mt6llo07rf70ktdv6rp.apps.googleusercontent.com';
    $client_secret = 'P1b_weyo7ODZCw6_ixgXO9wH';
    $redirect_url = 'https://salamonty.com/google-oauth-php';

    //create and request to connect to Google API
    $client = new Google_Client();
    $client ->setApplicationName('Google OAuth Login With PHP');
    $client->setClientId($client_id);
    $client->setClientSecret($client_secret);
    $client->setRedirectUri($redirect_uri);
     
    $objRes = new Google_Service_Oauth2($client);
    //Add access token to php session after successfully authenticate
    if(isset($_GET['code']))
    {
        $client->authenticate($_GET['code']);
        $_SESSION['access_token'] = $client->getAccessTocken();
        header('Location:'.filter_var($redirect_url,FILTER_SANITIZE_URL));

    }
    //set token
    if(isset($_SESSION['access_token']) && $_SESSION['access_token'])
    {
        $client->setAccessToken($_SESSION['access_token']);
        
    }

?>