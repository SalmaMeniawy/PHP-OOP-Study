<?php
#cloning object
	class Employe
	{
		private $name;
		function setName($name)
		{
			$this->name = $name;
		}
		function getName()
		{
			return $this->name;
		}
	}
	
?>