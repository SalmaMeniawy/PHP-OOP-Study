<!DOCTYPE html>
<html>
    <head>
        <title>
            <?php echo "Welcome to my website"; ?>
        </title>
    </head>
    <body>
        <?php  
        $date = "November 2 ,2017"?>
        <?php 
            // echo "Hello".$date;
        ?>
        <?php
            $title = "<h1> output content here </h1>";
            $body = "<p> the content of paragraph here </p>";
            // echo $title , $body;
            // echo "<h2> there is the content of title $title </h2>";
            // echo "<h3>there is here </h3>".$date;
            // echo "{$title} {$body} <p> Additional </p>";
        ?>
        <?php 
            $a = 5;
            // echo "$a_abc <br>";
            // echo "{$a}_abc <br>";
            /////////////////////////////////////
            // printf("your account contain %u this is your data",100.50);
            // %d known as placeholder     
            // printf("<br>%d count for bottles the price is $%.2f <br>",2,10.20);
            // printf("$%.2f", 43.2); 
            ////////////////////////////////////////////
            $cost = sprintf("$%.2f",100.254);
            // echo $cost;
            /////////////////////////////////////////
            //numeriacal string
            $a = "123";
            $b = "456";
            $c = $a +$b ;
            // echo $c."<br>";
            // echo $a.$b ;
            ////////////////////////////////////////////////////\
            $state[0] = "Alamba";
            $state[1] = "Alaska";
            $state[2] = "Arizona";
            class Abliance{
                private $_power;
                function set_power($state){
                        $this->_power = $state;
                }
            }
            $blender = new Abliance;
            $blender->set_power("on");
            // var_dump($blender);
            $score =(double) 1300;
            // print "$score<br>";
            // echo gettype($score);
            $score = "paly";
            // echo gettype($score);
            // $castscore = (array)$score;
            // echo gettype($castscore);
            // var_dump($castscore);
        //     $model = "toyota";
        //     $obj = (object)$model;
        //     echo gettype($obj)."<br>";
        //     var_dump($obj);
        //     print "<br>" ;
            $name = "salma";
            $woman = (object) $name;
            // print $woman->scalar."<br>";
            // var_dump($woman);

            $total = 5;
            $count = "15";
            $total = $total + $count ;
            // echo $total;
            // echo gettype($total);
            $total = "45 fire engine";
            $incoming = 10 ;
            $total += $incoming;
            // echo $total;
            $x = "1.2e3";
            $y = 10;
            $a = $x + $y ;
            // echo $a ;

            $item = 43;
            // printf("the variable \$item is Array %d ",is_array($item));

        ?>
        <?php
            $value1 = "Hello";
            $value2 =& $value1;
            // echo $value1."<br>" ;
            // echo $value2;
        ?>
        <?php
            foreach ($_SERVER as $var => $value){
                // echo "$var => $value.'<br>/'";
            }
            $_GET['cat']="appach";
            echo $_GET['cat'];
        ?>
    </body>
</html>