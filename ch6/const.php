<?php
class Employee
{
	protected $name;
	protected $title;

	function __construct()
	{
		echo "Employee Construct called !! <br>";
	}
}
class Manager extends Employee
{
	function __construct()
	{
		parent::__construct();
		echo "Manager Construct called !! <br>";
	}
}
$employee = new Manager();
$manger = new Employee();
// if($employee instanceof Employee )
// {
// 	// echo " Yes is Employee";
// }
// else { echo "is not Employee";}
// if(class_exists(Employee))
// {
// 	echo "the class exist !!";
// }
// else{
// 	echo "No";
// }
$result = get_class($employee);
echo "$result<br>!!!!!!!!!!";
// print_r(get_class_methods(Manager));
// print_r(get_parent_class($employee));
$res = is_a($employee, Employee);
echo "{$res}";
?>