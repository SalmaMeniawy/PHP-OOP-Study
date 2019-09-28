<?php
    define('DB_HOST','localhost');
    define('DB_PASWD','bigbigfamily');
    define('DB_USER','root');
    define('DB_NAME','php-study');
    //start session
    session_start();

    //connect to server and database
    $connection = new mysqli(DB_HOST,DB_USER,DB_PASWD,DB_NAME);

    //retreve all articles from database
    $stmt = $connection->prepare('SELECT id , title , content FROM articles WHERE id = ?');
    $stmt->bind_param('s',$_GET['id']);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows == 1)
    {
        $stmt->bind_result($id , $title ,$content);
        $stmt->fetch();
    }
    //add article title and link to the list
    $articleLink = "<a href='index.php?id={$id}'>{$title}</a>";
    if(!in_array($articleLink , $_SESSION['articles']))
    {
        $_SESSION['articles'] = $articleLink;
    }
?>