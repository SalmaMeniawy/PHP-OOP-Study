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
	$emp1 = new Employe();
	$emp1->setName("Salma");
	echo "{$emp1->getName()}<br>";
	$emp2 = $emp1;
	echo "{$emp2->getName()}<br>";
	$emp1->setName("Salma1");
	echo "{$emp1->getName()}<br>";
	echo "{$emp2->getName()}<br>";
	

	$emp2->setName("Aya");
	echo "{$emp1->getName()}<br>";
	echo "{$emp2->getName()}<br>";
	
?>