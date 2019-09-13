<?php
	class Employee
	{
		private $salary;
		private $name;
		function __construct($name)
		{
			$this->setName($name);
		}

		public function setName($name)
		{
			$this->name = $name;
		}
		public function setSalary($salary)
		{
			$this->salary = $salary;
		}
		public function getSalary()
		{
			return $this->salary ;
		}
	}
	class Executive extends Employee
	{
		public function pillageCompany()
		{
			$this->setSalary($this->getSalary() * 10);	
		}
	}
	class CEO extends Executive
	{
		function __construct($name)
		{
			parent::__construct($name);
			echo "<br><p>CEO Object is created </p>";
		}
		public function getFacelift()
		{
			echo "nip nip tuck tuck \n";
		}
	}
	$ceo = new CEO("Mona");
	$ceo->setName("Bernie");
	$ceo->setSalary(100000);
	$ceo->pillageCompany();
	$ceo->getFacelift();
	echo "Bernie's salary is :{$ceo->getSalary()}<br>";

	// $ceo1
?>