<?php
	require "DataCleaner.inc.php";
	require "Library.inc.php";

	abstract class Media
	{
		private $title ;

		function setTitle($title)
		{
			$this->title = $title;
		}
		abstract function setDescription($description);
	};

	class Newspaper extends Media
	{
		function setDescription($description)
		{
			echo "<br>hello from setDescription Newspaper <br>";
		}
		function setSubscribers($subscribers)
		{
				
		}
	}
	class CD extends Media
	{
		function setDescription($description)
		{
			echo "<br>Hello from CD<br>";
		}
		function setCopiesSolid($subscribers)
		{
			echo "<br>hello from setCopiesSolid CD<br>";
		}
	}

	// $emp = new Media();
?>