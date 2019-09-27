<?php
    session_start();
    //delete session variables
    unset($_SESSION);
    //reset the session array
    $_SESSION = array();
    //to destroy the session data on the server 
    session_destroy();
    define('TITLE',"Logout");
    include('templates/header');
?>
<html>
    <head></head>
    <body>
        <h2>Welcome to the J.D. Salinger FanClub!</h2>
        <p>You are now logged out.</p>
        <p>Thank you for using this site. We hope that you liked it.<br />
            Blah, blah, blah...
            Blah, blah, blah...</p>
    <?php
        if( $_SESSION['email'])
        {
            echo "it is fill";
        }else echo "it is empty";
    ?>
    </body>



</html>