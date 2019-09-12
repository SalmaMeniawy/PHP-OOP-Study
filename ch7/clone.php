<?php
	class Employee
	{
		private $employeeid;
		private $tiecolor;
		//define setter and getter
		function setEmployeeID($employeeid)
		{
			$this->employeeid = $employeeid;
		}
		function getEmployeeID()
		{
			return $this->employeeid;
		}
		function setTiecolor($tiecolor)
		{
			$this->tiecolor = $tiecolor;
		}
		function getTiecolor()
		{
			return $this->tiecolor;
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

	echo "{$employee1->getEmployeeID()}employee1<br>";
	echo "{$employee1->getTiecolor()}employee1<br>";

	//clone object
	$employee2 = clone $employee1;
	$employee2->setEmployeeID("45745");
	echo "{$employee2->getEmployeeID()}employee2<br>";
	echo "{$employee2->getTiecolor()}employee2<br>";
	// print_r(is_a($employee2, Employee));
	?>