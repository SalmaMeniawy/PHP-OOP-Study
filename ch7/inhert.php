<?php
	//define base class
	class Employee
	{
		private $name;
		//create setter and getter for name
		function setName($name)
		{
			if($name="")echo "Name can n't be Blank !!!";
			else $this->name = $name;	
		}
		//define getter for name
		function getName()
		{
			return "My name is ".$this->name = $name."<br>";
		}
	}

?>