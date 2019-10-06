
<?php
    //define config relates to connection
    define('DB_HOST',"localhost");
    define('DB_USER',"root");
    define('DB_PSWD','bigbigfamily');
    define('DB_NAME',"corporate1");
    $connection = new mysqli(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
    if ($connection->connect_errno) {
        // printf("Unable to connect to the database:<br /> %s",
        // $connection->connect_error);
        // exit();
        error_log(print_r("Unable to connect to the database:{$connection->connect_error}",
        $connection->connect_error));
    }
    // $connection = new mysqli();
    // $connection->connect(DB_HOST,DB_USER,DB_PSWD);
    // $connection->select_db(DB_NAME);
    // mysqli_connect_error();
    // printf("mysql Error number generated : %d ",$connection->connect_errno);
    // printf("mysql Error number generated : %d ",$connection->errno);

?>