<?php
	function is_sorted($array)
	{	
		$array1 = $array;
		$array2 = $array;
			
		if($array1 == $array2)
		{	
			echo "they are the same";
			return True;
		} else {
			echo "they are different";
			return False;
		}
	}

	function return_sorted(array &$array): array{
		sort($array);
		return $array;
	}

	function array_is_not_sorted(array $array){
		return $array  == return_sorted($array);
	}
	////////////////////////////////////////
	//task two
	function is_array_exist_in_array(array $array)
	{
		$values = array_values($array);
		foreach ($values as $value) {
			// echo "<br>".gettype($value);
			if(is_array($value))
			{
				echo "array exist";
				return true;
			}
		}
		return false ;

	}

	
	function check_type(){
		return gettype(3) == gettype(["a","b"]);
	}
?>
<?php
	$grades = array(100,0,1,2,array("salma","next"));
	// $result = is_sorted($grades);
	// echo "$result";

	// echo ("result is ". $variable = array_is_not_sorted($grades));

	// print_r($grades);
	echo "result".is_array_exist_in_array($grades);
	// echo "values if ". check_type();
?>