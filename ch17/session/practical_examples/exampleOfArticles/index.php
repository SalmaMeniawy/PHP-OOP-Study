<?php
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PSWD','bigbigfamily');
    define('DB_NAME','php-study');
    $id = NULL;
    $title = NULL;
    $content =NULL;
    session_start(); //start new session
    //connect to the database
    $connection = new mysqli(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
    if($connection)
    {
        $stmt = $connection->prepare('SELECT id,title,content FROM articles WHERE id= ?');
        $stmt->bind_param("i",$_GET['id']);
        $stmt->execute();
        $stmt->store_result();
        if($stmt->num_rows == 1)
        {
            $stmt->bind_result($id, $title, $content);
            echo $id;
            echo "we after if";
        }
        $articleLink = "<a href='index.php?id={$id}'>{$title}</a>";
        if (! in_array($articleLink, $_SESSION['articles']))
        {
            $_SESSION['articles'][] = $articleLink;
            var_dump($_SESSION['articles']);

        }
        // Display the article
        echo "<p>$title</p><p>$content</p>";
        // Output list of requested articles
        echo "<p>Recently Viewed Articles</p>";
        echo "<ul>";
        foreach($_SESSION['articles'] as $doc) {
            echo "<li>$doc</li>";
            // setcookie($doc , $doc);

        }
        echo "</ul>";

    }else{
        die("Error in connection");
    }
?>