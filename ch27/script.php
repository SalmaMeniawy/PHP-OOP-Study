<?php
//define config relates to connection
define('DB_HOST',"localhost");
define('DB_USER',"root");
define('DB_PSWD','bigbigfamily');
define('DB_NAME',"corporate");
$connection = new mysqli(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
$query = "SELECT sku , name , price FROM products ORDER by name";
$result = $connection->query($query,MYSQLI_STORE_RESULT);
// var_dump($result);
while($row = $result->fetch_object()){
    print(" Name : $row->name Price : $row->price <br>" );
}
// while(list($sku , $name , $price)=$result->fetch_row())
// {
//     printf("(%s) %s: \$%s <br />", $sku, $name, $price);

// }
$result->free();



?>