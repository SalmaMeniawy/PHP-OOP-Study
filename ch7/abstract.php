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
?>