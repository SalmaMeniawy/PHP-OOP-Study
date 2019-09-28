<?php
    define('DB_HOST','localhost');
    define('DB_PASWD','bigbigfamily');
    define('DB_USER','root');
    define('DB_NAME','php-study');
    //start session
    session_start();
    // $id = NULL;
    $title = NULL;
    $content = NULL;
    $_SESSION['articles'] = [];
    //connect to server and database
    $connection = new mysqli_connect(DB_HOST,DB_USER,DB_PASWD,DB_NAME);
    $stmt = $connection->prepare("SELECT id, title, content FROM articles WHERE id = ?");
    if(!$connection)
    {
        echo "Error ".mysqli_connect_error();
    }
    // if($connection->connect_error())
    // {
    //     die("Fail Error");
    // }
    //retreve all articles from database
    // $stmt = $connection->prepare('SELECT id,title,content FROM articles WHERE id = ?');
    $stmt->bind_param('i',$_GET['id']);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows == 1)
    {
        $stmt->bind_result($id, $title, $content);
        #stmt->fetch();

        // $stmt->bind_result($id , $title ,$content);
        // $stmt->fetch();
    }
    echo $id . $title .$content;
    //add article title and link to the list
    $articleLink = "<a href='index.php?id={$id}'>{$title}</a>";
    // $articleLink = "<a href='article.php?id={$id}'>{$title}/</a>";

    if(!in_array($articleLink , $_SESSION['articles']))
    {
        $_SESSION['articles'][] = $articleLink;
    }
    //display the article
    echo "<p>$title</p><p>$content</p>";
    // Output list of requested articles
    echo "<p>Recently Viewed Articles</p>";
    echo "<ul>";
    foreach($_SESSION['articles'] as $doc) {
        echo "<li>$doc </li>";
    }
    echo "</li>";

?>