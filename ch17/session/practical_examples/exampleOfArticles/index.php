<?php
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PSWD','bigbigfamily');
    define('DB_NAME','php-study');
    session_start(); //start new session
    //connect to the database
    $connection = new mysql(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
    if($connection)
    {
        $stmt = $connection->prepare('SELECT id , title , content FROM articles WHERE id= ?');
        $stmt->bind_param("i",$_GET['id']);
        $stmt->execute();
        $stmt->store_result();
        if($stmt->num_rows == 1)
        {
            $stmt->bind_result($id, $title, $content);
        }
    }else{
        die("Fatial Error");
    }
?>