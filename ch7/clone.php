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
