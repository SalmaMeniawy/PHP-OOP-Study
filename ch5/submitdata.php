salma 23 salma@gmail.com
Mona 27 mona@gmail.com
Mohammed 25 mody@gmail.com
<?php
	function sanitize_data(&$value , $key){
		$value = strip_tags($value);
		echo "$value";
	}
	array_walk($_POST["Keyword"],"sanitize_data");
?>