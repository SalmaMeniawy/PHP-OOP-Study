
<?php
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
    $query = 'SELECT sku , name , price FROM products ORDER by name';
    //send the query to MYSQL server
    $result = $connection->query($query ,MYSQLI_STORE_RESULT);

    //Iterate through the result set 
    while(list($sku , $name ,$price ) = $result->fetch_row())
    {
        printf("the data is %s ,%s ,%d <br> ",$sku ,$name ,$price);
    }
    
    // $connection = new mysqli();
    // $connection->connect(DB_HOST,DB_USER,DB_PSWD);
    // $connection->select_db(DB_NAME);
    // mysqli_connect_error();
    // printf("mysql Error number generated : %d ",$connection->connect_errno);
    // printf("mysql Error number generated : %d ",$connection->errno);

?>