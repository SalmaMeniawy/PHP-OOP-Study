<?php
	class Employee
	{
		// private $name;
		// public  $dept = "MIS";
		// private $title;

		// public function get_name()
		// {
		// 	return $this->name;
		// }
		// public function set_name($name)
		// {
		// 	$this->name = $name;
		// }
		// public function sayHello()
		// {
		// 	echo "Hi , my name is {$this->get_name()}";
		// }
		private $ein;
		function __construct($ein)
		{
			if($this->verifyEIN($ein))
			{
				echo "EIN verified .Finish!!";
			}
		}	
		protected function verifyEIN($ein)
		{
			echo "<br>Hello from verifyEIN<br>";
			return TRUE;
		}
	}
?>
<?php
	class Programmer extends Employee
	{
		function __construct()
		{
			echo "Hello from Programmer constract";
		}
		public function sayHello()
		{
			echo " Hello !!";
		}
	}
	$employee = new Employee('123-45-455');
	$pro = new Programmer('122-454-575');
	$pro->verifyEIN();
	
	
?>