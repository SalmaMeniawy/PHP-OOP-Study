<?php
	abstract class Media
	{
		private $title ;

		function setTitle($title)
		{
			$this->title = $title;
		}
		abstract function setDescription($description)
	}

	class Newspaper extends Media
	{
		function setDescription($description)
		{

		}
		function setSubscribers($subscribers)
		{
			
		}
	}
	class CD extends Media
	{
		
	}
?>