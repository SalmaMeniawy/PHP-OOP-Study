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
    $query = 'DELETE FROM products WHERE sku="OB56545"';
    $result = $connection->query($query,MYSQLI_STORE_RESULT);
    // var_dump($result);
    /**
     * affected rows that display the number of rows that deleted so 
     * it is property in the mysqli class
     */
    // printf("%d rows have been deleted.<br>", $connection->affected_rows);
    // printf("%d rows have been deleted and remain",$result->affected_rows );
    $query1='SELECT sku, name FROM products ORDER by name';
    $result1 = $connection->query($query1);
    while(list($sku ,$name) = $result1->fetch_row())
    {
        // printf("sku :%s AND Name : %s <br>",$sku ,$name);
    }
?>
<?php
     function read_fields(string $table , array $fields ,array $where)
    {
        $connection = new mysqli(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
        $query = "SELECT  "; //start the query
        // foreach($fields as $field_name)
        // {
        //     $query.= $field_name;
        //     $query.=',';
            
        // }
        for($x = 0 ;$x <sizeof($fields);$x++)
        {
            $query.= $fields[$x];
            if($fields[$x+1]!= NULL){
                $query.=' , ';
            }
        }
        $query .=" WHERE ";
            $keys = array_keys($where);
            $count = count($where);
            for($i = 0 ;$i <$count;$i++)
            {
             $add = $where[$keys[$i]];
             $query .= "$keys[$i] = $add";
             if($where[$keys[$i+1]]!= NULL){
                $query.=" AND ";
            }
            }
        $query .=" FROM $table";//finally add the table name to the query
        echo $query;
        $result = $connection->query($query);
    
        return $result;      

    }
     
    $zee = read_fields('products',['id','name'] ,["id"=>"1","name"=>"salma"]);
    // var_dump($zee);
    // foreach ($zee as $results )
    // {
    //     list($id , $name) = $results;
    //     printf("ID %d and Fields are %s <br>",$id ,$name);
    // }
?>