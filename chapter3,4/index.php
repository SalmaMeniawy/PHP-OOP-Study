<?php
    $x = 18.5;
    echo (int) $x ;
    echo "<br>" ;    
    $string = (string) 123456 ;
    echo settype($x ,"string");
    echo "<br>";
    $obj = (object) ["foo"=>"bar" , "baz"=>"lol"];
    var_dump($obj);
    // echo $string;
    echo"<br>";
    $employee = (object)["name"=>"Ali",
        "dateOfBirth"=>"12/12/1999","phone"=>"01021215548"];
    var_dump($employee);
    $my_Array = array("AYA","Salma","Mona");
    echo"<br>";
    $var1 = "099";
    $var2 = "1";
    settype($var1,"integer");
    settype($var2,"integer");
    echo $var1 + $var2 ;
    $boo = boolval("0") ;
    if (is_bool($boo)) {
        echo "<br>this is bool <br> ";
    }
    else{
        echo "<br> is not bool <br>";
    }
    if (is_null($var1)){
        echo "the var is null";
    }
    else
    {
        echo "the var is not null";
    }
    if (is_object($employee)){
        echo "<br> is the object <br>";
    }
    else{
        echo "<br> is not an object <br>";
    }
    if(is_array($employee)){
        echo "<br>this is array<br>";
    }
    else{
        echo "<br> this is not array<br>";
    }
    if (is_array($my_Array)){
        echo"<br> this is my array Right!!";
    }
    else{
        echo"<br>this is not Array  <br>";
    }
    $name = 'foo';
    $$name = 'boo';
    echo "<br>".$foo."<br>";
    // $he = '123';
    // $$he ='456';
    // echo "<br>".$${'123'};
    print_r($my_Array);

    $obj1 = new StdClass(); //object 
    $obj1->foo = "bar";
    print_r($obj1);
    echo "<br>";
    var_dump($obj1);
    echo "<br>"."###################"."<br>";
    print_r($employee);
    echo "<br>";
    var_dump($employee);

    if (isset($x)){
        echo "<br>the var is exist<br>";
    }
    else{
        echo "<br>the var is does not exist <br>";
    }
    $dog = NULL ;
    if (empty($dog)){
        echo"is empty ";
    }
    else{
        echo "is not empty";
    }
    define('EMAIL','davey@gmail.com');
    echo EMAIL;
    define('USE_XML',true);
    if (USE_XML){
        echo "BABY SHARK";
    }else{
        echo "KOKO";
    }
    echo "<br>".USE_XML;
    const MY_EMAIL = "sa@gmail.com";
    echo MY_EMAIL;
    ########################### ADDITION #####################
    $a = (int)1 ;
    $a++;
    echo "<br>".$a;
    ++$a;
    echo "<br>".$a;
    $string1 = 'hello';
    $string2 = 'world';
    echo $string1;
    echo "<br>".$string2."<br>";
    $string1 .= $string2 ;
    echo $string1."<br>";
    $a = 1;
    echo $a << 1 << 1 ;
    // $a << 1 ;
    // echo $a;
    $zee = @fopen("/tmp/foo");
    echo $zee;

    #switch 
    $b = 0;
    switch("ZEEEE"){
        case 0 : echo "case zero";
        break;
        case 1 : echo "case One";
        break;
        default : echo "Elnemra 8alat ya 3mad";
        break;
    }

    #example
    // $a = 1 ;
    switch($a){
        case(str_pad($a ,'bat') !== false ):
        echo "string contain bad".PHP_EOL;
    }

?>