<?php
	$carBrands = ["marseda","lada","ford","honda"];
	// echo $carBrands[0];
	$germanCars = [12=>"lada" , 15=>"hunda"];
	// echo "$germanCars[12]";
	$state = ["OH"=>"Ohai"];
	// echo $state["OH"];
	$mydata[0] = "salma";
	$mydata[1] = "salma@gmail";
	$mydata[] = "02154314321";
	// echo $mydata[2];
	// creating array with construct
	$languages = array("English" , "Arabic" , "German" , "Spanish");
	// echo $languages[1];
	$languages = ["English"=>"english" , "Arabic"=>"arabic"];
	// echo $languages["English"];
	//when function return array 
	function person()
	{
		return["Name"=>"Salma" , "Age"=>"23","email"=>"sal@g.com"];
	}
	$person = person();
	// echo $person["Name"];
	$name = person()["Name"];
	// echo $name;

?>
<?php
		//open file
		$users = file("users.txt");
		// var_dump($users);
		// echo "<br>";
		foreach ($users as $user) {
			list($name , $age , $email)= explode(" ", $user);
			// printf("Name : %s <br>",$name);
			// printf("age : %d <br>",$age);
			// printf("email :%s <br>",$email);
		}

?>
<?php
	$die = range(1, 6);
	// echo $die[0];
	// we need range from 0 to 20 which divided by 2 "even"
	$even = range(0, 20,2);
	$letters = range("A","F");

	foreach ($letters as $key) {
		// echo "$key <br>";
		# code...
	}
	$states = array("Florida");
	$state = "ohai";
	// printf("\$states is an array : %s <br>",is_array($states) ? "True": "False");
	// printf("\$state is an array : %s <br> ",is_array($state)? "True":"False");
	// $cost = sprintf("$%.2f", 43.2); // $cost = $43.20
	// echo gettype($cost);
	$customers = array();
	$customers[] = array("salma","salma@xmail.com","23");
	$customers[] = array("Mona","mona@xmal.com" , "28");
	$customers[] = array("koko" , "koko@xmail.com","21");

	foreach ($customers as $subarray) {
		// vprintf("<p> Name: %s <br> Email : %s <br> Age : %d <br>", $subarray);
	}
	// print_r($customers);
	// print_r($states);
	$me = [];
	// $check = print_r($states);
	// echo "<br> $check";
	// var_dump($states);
?>
<?php
	// $data = array("salma","koko");
	// array_unshift($data,"Mohammed");
	// // var_dump($data);
	// echo "<br>";
	// // array_shift($data);
	// // var_dump($data);
	// $data1 = array("salma" , "mona");
	// array_push($data1, "hakonamatata");
	// var_dump($data1);
	// echo "<br>";
?>
<?php
	$state = "Ohio";
	$states = ["California", "Hawaii", "Ohio", "New York"];
	// if(in_array($state, $states)) echo "Not to worry, $state is smoke-free!";
	// if(in_array($state, $states,True)) echo "yes I found it";
	// echo "<br>";
?>
<?php
	$state1["Delaware"] = "December 7, 1787";
	$state1["Pennsylvania"] = "December 12, 1787";
	$state1["Ohio"] = "March 1, 1803";
	// if(array_key_exists("Delaware", $state1)) echo "the key is exist<br>";
	// if(array_search("December 7, 1787", $state1)) echo "I found the value";
	$key = array_keys($state1);
	// print_r($key);
	$population = ["Ohio" => "11,421,267", "Iowa" => "2,936,760"];
	// print_r(array_values($population));
	$simpsons = [
		["name"=>"Salma","gender"=>"female"] , 
		["name"=>"Mohammed" , "gender"=>"male"] ,
		["name"=>"heba","gender"=>"female"]
	];
	$columns = array_column($simpsons, 'name');
	// print_r($columns);
	//////////////////////////////////////////////////////////////////////////////
	$capitals = array("Ohio" => "Columbus",
					 "Iowa" => "Des Moines");
	// echo "<p>Can you name the capitals of these states?</p>";
	while ($key = key($capitals)) {
		// printf("%s <br> ",$key);
		next($capitals);
	}
	$capitals = array("Ohio" => "Columbus",
					 "Iowa" => "Des Moines");
	// echo "<p>Can you name the states belonging to these capitals?</p>";
	while ($value = current($capitals)) {
		// printf("%s <br>",$value);
		next($capitals);
	}

	//////////////////////////////////////////////////////////////////////////////
?>
<?php
	$fruites = array("apple","orange","banana");
	// echo current($fruites)."<br>";
	// echo next($fruites)."<br>";
	// echo next($fruites)."<br>";
	// echo prev($fruites);
	// echo "<br> <br>";
	// echo reset($fruites);
	// echo "<br>".end($fruites);

?>
<?php
	$people = array("Peter", "Joe", "Glenn", "Cleveland");

	// echo current($people) . "<br>";
	// echo next($people) . "<br>";
	// echo prev($people);
?>
<?php
	$garden = array("cabbage", "peppers", "turnips", "carrots","turnips","Salma","turnips");
	// echo count($garden);
	$locations = array("Italy", "Amsterdam", array("Boston","Des Moines"),
		"Miami");
	// echo count($locations ,1);
	// echo sizeof($locations);
	$states2 = ["Ohio", "Iowa", "Arizona", "Iowa", "Ohio"];
	$stateFrequency = array_count_values($states2);
	// var_dump($stateFrequency);
	// print_r($stateFrequency);
	$garden1 = array_unique($garden);
	// var_dump($garden1);
	echo "<br>";
	// print_r(array_reverse($garden1));
	echo "<br>";
	// print_r(array_reverse($garden1 , 1));
	// print_r(array_flip($states2));
	$grades = array(42,98,100,100,23,43,12);
	sort($grades);
	// print_r($grades);
	echo "<br>";
	// print_r($states2);
	echo "<br>";
	// sort($states2);
	// print_r($states2);
	$states3 = array("OH" => "Ohio", "CA" => "California", "MD" => "Maryland");
	print_r($states3);
	echo "<br>";
	ksort($states3);
	print_r($states3);
	echo "<br>";
	krsort($states3);
	print_r($states3);
	
	// sort($states3);
	// print_r($states3);
	echo "<br>";
	// asort($states3,1);
	// print_r($states3);
	// rsort($states3);
	// print_r($states3);

?>
<?php
	$states4 = array("Ohio", "Florida", "Massachusetts", "Montana");
	rsort($states4);
	// print_r($states4);



?>