<?php
	class Employee
	{
		private $employeeid;
		private $tiecolor;
		//define setter and getter
		
		public function setEmployeeID($employeeid)
		{
			$this->employeeid = $employeeid;
		}
		public function getEmployeeID()
		{
			return $this->employeeid;
		}
		public function setTiecolor($tiecolor)
		{
			$this->tiecolor = $tiecolor;
		}
		public function getTiecolor()
		{
			return $this->tiecolor;
		}
		public function __clone()
		{
			$this->setTiecolor("Blue");
		}
		
	}

?>
<?php
	//create new employee instance
	$employee1 = new Employee();
	//set employee ID
	$employee1->setEmployeeID("123456");

	//set tiecolor
	$employee1->setTiecolor("red");

	// echo "{$employee1->getEmployeeID()}employee1<br>";
	// echo "{$employee1->getTiecolor()}employee1<br>";
	$employee2 = clone $employee1;
	$employee2->setEmployeeID("145236");
	printf("Employee 1 ID %d <br>",$employee1->getEmployeeID());
	printf("Employee 2 ID %d <br>",$employee2->getEmployeeID());
	printf("Employee 1 tie %s <br>",$employee1->getTiecolor());
	printf("Employee 2 tie %s <br>",$employee2->getTiecolor())

	//clone object
	// $employee2 = clone $employee1;
	// $employee2->setEmployeeID("45745");
	// echo "{$employee2->getEmployeeID()}employee2<br>";
	// echo "{$employee2->getTiecolor()}employee2<br>";
	// print_r(is_a($employee2, Employee));

	?>