<?php
    define('DB_HOST','localhost');
    define('DB_PASWD','bigbigfamily');
    define('DB_USER','root');
    define('DB_NAME','php-study');
    session_start();
    if(!isset($_SESSION['username'])){
        if(isset($_POST['username']) && isset($_POST['password']))
        {
            $connection = new mysqli(DB_HOST,DB_USER,DB_PASWD,DB_NAME);
            $stmt = $connection->prepare("SELECT first_name FROM users WHERE username = ? AND password = ? ");
            // echo $_POST['username'];
            // echo $_POST['password'];
        //    if(isset($_POST['username']) && isset($_POST['password'])) 
        //     {
        //         echo "yes";
        //     }
            // $stmt->bind_param('ss',$_POST['username'],$_POST['password']);
            $stmt->bind_param('ss', $_POST['username'], $_POST['password']);

            $stmt->execute();
            $stmt->store_result();
            if($stmt->num_rows == 1)
            {
                $stmt->bind_result($firstName);
                $stmt->fetch();
                $_SESSION['first_name'] = $firstName;
                // header('Location:http://localhost:8080/welcome.php');
                include('welcome.php');
            }
        }else{
            require('login.html');
        }
    }else{
        echo "you are already logged in !!!!";
    }


?>