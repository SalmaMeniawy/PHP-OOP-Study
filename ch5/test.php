<?php
	// $dates = array('10-10-2011', '2-17-2010', '2-16-2011',
	// '1-01-2013', '10-10-2012');
	// sort($dates);
	// echo "<p>Sorting the array using the sort() function:</p>";
	// print_r($dates);
	// natsort($dates);
	// echo "<p>Sorting the array using the natsort() function: </p>";
	// print_r($dates);
	// // Create function use to compare two date values
	// function DateSort($a , $b)
	// {
	// 	// If the dates are equal, do nothing.
	// 	if($a == $b)return 0 ;

	// 	// Disassemble dates
	// 	list($amonth , $aday , $ayear ) = explode('-', $a);
	// 	list($amonth , $aday , $ayear)=explode('-', $b);
	// }
?>
<?php
	$face = ["A","C",100,"D","T"];
	$numbered = [1,2,100,45,85,96];
	$merged_array = array_merge($face , $numbered);
	print_r($merged_array);
	$a1 = ["name"=>"salma","age"=>23];
	$a2 = ["name"=>"salma","dept"=>"mis"];
	$a3 = array_merge($a1 , $a2);
	echo "<br>";
	print_r($a3);
?>
<?php
	//array_merge_recursive
	$class1 = array("johan"=>100 , "jack"=>90);
	$class2 = array("hend"=>85 , "johan"=>45);
	$merge_classes = array_merge_recursive($class1 , $class2);
	$merge_classes2 = array_merge($class1 , $class2);
	echo "<br>";
	// print_r($merge_classes2);
	echo "<br>";
	// print_r($merge_classes);
?>
<?php
	$abb = array("AL","AK","AZ","AR");
	$states = array("Alabama", "Alaska", "Arizona", "Arkansas","California", "Colorado", "Connecticut");
	$random_state = array_rand($states , 2);
	echo "<br>";
	print_r($random_state);
	// $statemap = array_combine($abb, $states);//the two arrays must be in the same size
	// print_r($statemap);
	$subset = array_slice($states, 4);
	$subset1 = array_slice($states , 2,-2);
	// print_r($subset);
	echo "<br>";
	// print_r($subset1);
	// $splice = array_splice($states, 4);
	// print_r($splice);
	echo "<br>";
	// print_r($states);
	echo "<br>";
	$subset2 = array_splice($states,2,-1,array("New York","koko"));
	// print_r($states);
	//array_splice change in the original array
	echo "<br>";
	// print_r($subset2);
?>
<?php
	echo "<br>";
	$array1 = array("OH", "CA", "NY", "HI", "CT");
	$array2 = array("OH", "CA", "HI", "NY", "IA");
	$array3 = array("TX", "MD", "NE", "OH", "HI");
	$intersection = array_intersect($array1, $array2, $array3);
	$diff = array_diff($array1, $array2,$array3);
	print_r($diff);
	// print_r($intersection);
	echo "<br>";
	$arr1 = array_intersect_key($array1, $array2,$array3);
	// print_r($arr1);
	// var_dump($arr1);

?>
<?php
	$array4 = [
		"OH"=>"Ohio",
		"CA"=>"California",
		"HI"=>"Hawaii"
	];
	$array5 =[
		50=>"zimbabwai" ,
		"OH"=>"Ohio",
		"CA"=>"California"
	];
	$array6 =[
		"TX"=>"Taxies",
		"OH"=>"Ohio",
		"CA"=>"California"
	];
	$result = array_intersect_assoc($array4, $array5 ,$array6);
	$rand = array_rand($array5,2);
	print_r($rand);
	echo "<br>";
	print_r($result);
	echo "<br>";
	$diff1 = array_diff_assoc($array4, $array5,$array6);
	print_r($diff1);
	echo "<br>";
	$cards = array("jh", "js", "jd", "jc", "qh", "qs", "qd", "qc","kh", "ks", "kd", "kc", "ah", "as", "ad", "ac");
	print_r($cards);
	echo "<br>";
	shuffle($cards);
	print_r($cards);
	echo "<br>";
	$grades = [42,"hi",42];
	print_r(array_sum($grades));
	$head=array_chunk($cards, 4);
	print_r($head);
	
?>