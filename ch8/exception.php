<?php
class MyException extends Exception
{
	function __construct($language , $errorcode)
	{
		$this->language = $language;
		$this->errorcode = $errorcode;
	}
	function getMessageMap()
	{
		$errorArray = Null;
		// $errors= file("errors/{$this->language}.txt");
		// print_r($errors);
		// foreach($errors as $error)
		// {
		// 	list($key , $value) = explode(",", $error,2);
		// 	$errorArray[$key] = $value;
		// }
		// return $errorArray[$this->errorcode];
		$errors = file("/errors/{$this->language}.txt");
		foreach($errors as $error){
			list($key,$value) = explode(",", $error, 2);
			$errorArray[$key] = $value;
		}
		return $errorArray[$this->errorcode];

	}
}
try{
	throw new MyException("english",4);
}catch(MyException $e)
{
	echo $e->getMessageMap();
}

?>