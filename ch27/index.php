
<?php
    //define config relates to connection
    define('DB_HOST',"localhost");
    define('DB_USER',"root");
    define('DB_PSWD','bigbigfamily');
    define('DB_NAME',"corporate");
    $connection = new mysqli(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
    // $connection = new mysqli();
    // $connection->connect(DB_HOST,DB_USER,DB_PSWD);
    // $connection->select_db(DB_NAME);
    // mysqli_connect_error();
    printf("mysql Error number generated : %d ",$connection->connect_errno);
    printf("mysql Error number generated : %d ",$connection->errno);

?>