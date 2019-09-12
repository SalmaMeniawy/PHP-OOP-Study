<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="submitdata.php" method="POST">
		<p>
		Provide up to six keywords that you believe best describe the state in
		which you live:
		</p>
		<p> Keyword 1 : <br>
			<input type="text" name="Keyword[]" size="20" value="">
		</p>
		<p> Keyword 2 : <br>
			<input type="text" name="Keyword[]" size="20" value="">
		</p>
		<p> Keyword 3 : <br>
			<input type="text" name="Keyword[]" size="20" value="">
		</p>
		<p> Keyword 4 : <br>
			<input type="text" name="Keyword[]" size="20" value="">
		</p>
		<p> Keyword 5 : <br>
			<input type="text" name="Keyword[]" size="20" value="">
		</p>
		<p> 
			<input type="submit" value="submit">
		</p>
	</form>
</body>
</html>
<?php
	function sanitize_data(&$value , $key){
		$value = strip_tags($value);
		echo "$value<br>";
	}
	array_walk($_POST["Keyword"],"sanitize_data");
?>