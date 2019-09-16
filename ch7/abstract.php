<?php
	require "DataCleaner.inc.php";
	require "Library.inc.php";
	use Library;
	use DataCleaner;
	// Instantiate the Library's Clean class
	$filter = new Library\Clean();

	// Instantiate the DataCleaner's Clean class
	$profanity = new DataCleaner\Clean();

	//create a book title
	$title = "the idiotic sun also rises";

	// Output the title before filtering occurs
	printf("Title before filters: %s <br />", $title);


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