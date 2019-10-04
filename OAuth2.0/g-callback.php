<?php
    // echo "<br>hiii".$_GET['code'];
    if(isset($_SESSION['access_token']))
    {
        $client->setAccessToken($_SESSION['access_token']);
    }
    
    else if(isset($_GET['code']) && !empty($_GET['code'])){
        echo $_GET['code']."<br>";
        echo strlen($_GET['code']);
        $code = trim($_GET['code']);
        if(isset($code) && !empty($code)){
        $token = $client->fetchAccessTokenWithAuthCode($code);
        $_SESSION['access_token'] = $token; 

        }
        
        // echo "hi".$code."<br>";
        // try{
        // $token = $client->fetchAccessTokenWithAuthCode($code);

        // }catch(LogicException $e)
        // {
        //     echo $e->get_message();
        // }

        // if(isset())
        //  {
        //     echo "exist";
        // }else echo "NOOO";
        // echo $token;
        // $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        // $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    }
    else{
        header('Location: login.php');
        exit();
    }
    $oauth = new Google_Service_Oauth2($client);
    $userdata = $oauth->userinfo_v2_me->get();
    $_SESSION['id'] = $userData['id'];
	$_SESSION['email'] = $userData['email'];
	$_SESSION['gender'] = $userData['gender'];
	$_SESSION['picture'] = $userData['picture'];
	$_SESSION['familyName'] = $userData['familyName'];
    $_SESSION['givenName'] = $userData['givenName'];
    $sql = "insert into google_users (clint_id,name,last_name,google_email,gender,picture_link) values
    ('".$userData['id']."','".$userData['givenName']."','".$userData['familyName']."','".$userData['email']."',
    '".$userData['gender']."','".$userData['picture']."')";
    mysql_query($con ,$sql);
    header('Location: index.php');
    exit();
?>