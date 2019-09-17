<?php
class MyException extends Exception
{
	function __construct($language , $errorcode)
	{
		$this->language = $language;
		$this->errorcode = $errorcode;
	}
}


?>