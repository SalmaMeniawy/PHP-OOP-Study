<?php
    $sku = "TGR52895";
    $name = "RETUN WHITE";
    $price = 5.12;
     //define config relates to connection
     define('DB_HOST',"localhost");
     define('DB_USER',"root");
     define('DB_PSWD','bigbigfamily');
     define('DB_NAME',"corporate");
     $connection = new mysqli(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
     $query = "INSERT INTO products SET sku = ? ,name = ? ,price = ? ";
     //create statment object
     $stmt = $connection->stmt_init();
     $stmt->prepare($query);
     $stmt->bind_param("ssd",$sku , $name , $price);
     $stmt->execute();
     $stmt->close();
     $connection->close();

    //  $query = "SELECT sku , name , price FROM products ORDER by sku";
    //  $stmt = $connection->stmt_init();
    //  $stmt->prepare($query);
    //  $stmt->close();
    //  $connection->close();

?>