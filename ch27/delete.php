<?php
//try to delete data from my DB
 //define config relates to connection
 define('DB_HOST',"localhost");
 define('DB_USER',"root");
 define('DB_PSWD','bigbigfamily');
 define('DB_NAME',"corporate");
 $connection = new mysqli(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
 if ($connection->connect_errno) {
     // printf("Unable to connect to the database:<br /> %s",
     // $connection->connect_error);
     // exit();
     error_log(print_r("Unable to connect to the database:{$connection->connect_error}",
     $connection->connect_error));
     exit();
 }
    $query = 'DELETE FROM products WHERE sku="TY457566"';
    $result = $connection->query($query,MYSQLI_STORE_RESULT);
    // var_dump($result);
    // printf("%d rows have been deleted and remain",$result->affected_rows );
    $query1='SELECT sku, name FROM products ORDER by name';
    $result1 = $connection->query($query1);
    while(list($sku ,$name) = $result1->fetch_row())
    {
        printf("sku :%s AND Name : %s <br>",$sku ,$name);
    }
?>