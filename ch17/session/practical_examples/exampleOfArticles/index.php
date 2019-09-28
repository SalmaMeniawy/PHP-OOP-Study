<?php
    define('DB_HOST','localhost');
    define('DB_PASWD','bigbigfamily');
    define('DB_USER','root');
    define('DB_NAME','php-study');
    //start session
    session_start();

    //connect to server and database
    $connection = new mysqli(DB_HOST,DB_USER,DB_PASWD,DB_NAME);


?>