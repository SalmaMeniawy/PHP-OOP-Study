<!DOCTYPE html>
<html>
    <body>
        <form action="subscribe.php" method="post">
            <p> 
                Email Address : "<br>"
                <input type="text" name="email" size="20" maxlength="50" value="">
            </p>
            <p>
            	Password : "<br>"
            	<input type="pswd" name="password" size="20" maxlength="15" value="" >
            </p>
            <p>
            	<input type="submit" name="subscribe" value="subscribe!">
            </p>
        </form>
        <?php 
        	date('Y');
			// echo $_ENV['SHELL'];
			// echo "hello";
			// foreach ($_ENV as $val => $value ){
			// 	echo "$val => $value";
			// }
        	$cost=100;
        	$total_cost = $cost + $cost * 0.02;
        	// echo "$total_cost";
        	$inv = 15;
        	$oldInv = $inv-- ;
        	// echo "$inv <br>";
        	// echo "$oldInv <br>";
        	$var = 15 ;
        	$oldVar = ++$var;
        	// echo "$var <br>";
        	// echo "$oldVar <br>";
        	// $file = fopen("filename.txt", 'r') OR die("File does not exist");
        	$a = 100 ;
        	// echo pow(5, 3);
        	$value = pow(5, 3);
        	// echo $value."this is the value {$value}.<br>";

		?>
		<?= date('l, F n, Y'); ?>
		<?php 
			$string = "salma";
			echo strtoupper($string);
			echo mb_strtolower($string);
		?>
    </body>
</html>
