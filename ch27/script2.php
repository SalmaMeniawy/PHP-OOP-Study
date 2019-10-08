<?php
 //define config relates to connection
 define('DB_HOST',"localhost");
 define('DB_USER',"root");
 define('DB_PSWD','bigbigfamily');
 define('DB_NAME',"corporate");
 $connection = new mysqli(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
    // Create query
$query = 'SELECT sku, name, price FROM products ORDER BY sku';
$stmt = $connection->stmt_init();
$stmt->prepare($query);
$stmt->execute();
//bind result parameter
$stmt->bind_result($sku , $name , $price);
while($stmt->fetch())
{
    printf("%s , %s , %d <br>",$sku , $name ,$price);
}
$stmt->close();
$connection->close();
?>