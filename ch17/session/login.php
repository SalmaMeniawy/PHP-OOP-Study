<?php
    /*this is page help people to login in your site*/
    define('TITLE','Login');
    include('templates/header.html');
    // Print some introductory text:
    print '<h2>Login Form</h2>
        <p>Users who are logged in can
        take advantage of certain features
        like this, that, and the other
        thing.</p>';
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if(!empty($_POST['email']) && !empty($_POST['password']))
        {
            if(strtolower($_POST['email']== "me@example.com") && $_POST['password']=='test')
            {
                session_start();
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['password'] = $_POST['password'];
                $_SESSION['loggedin'] = time();
                echo $_SESSION['email'];
                echo $_SESSION['password'];
                echo $_SESSION['loggedin'];
            }
        }
    }else { // Display the form.
        print '<form action="login.php"
        method="post">
        <p>Email Address: <input type="text"
        name="email" size="20" /></p>
        <p>Password: <input type="password"
        name="password" size="20" /></p>
        <p><input type="submit" name=
        "submit" value="Log In!" /></p>
        </form>';
    }   

?>