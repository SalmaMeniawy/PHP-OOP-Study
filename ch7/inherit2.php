<?php
	class Employee
	{
		private $salary;
		private $name;

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
		public function getFacelift()
		{
			echo "nip nip tuck tuck \n";
		}
	}
?>