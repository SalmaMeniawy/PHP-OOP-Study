		<?php
		class Employee
		{
			public $name;
			public $city;
			protected $wage;
			protected $hours;		
			public function __get($propName)
			{
				echo "__get called!<br />";
				$vars = array("name", "city");
				if (in_array($propName, $vars))
				{
				return $this->$propName;
				}
		 		else 
		 		{
					return "No such variable!";
				}

			}
			public function calculateSalary()
			{
				return $this->wage * $this->hours;
			}
	}

	class Visitor{
		
		public function greetVisitor()
		{
			echo " Hello !!";
		}
		public function setCardNumber($number)
		{
			if ($this->validCardNumber($number))
			{
				$this->cardNumber = $number;
				echo "the card number = number<br>";
				return True;
			}
			echo "else from setCardNumber<br>";
			return False;
		}
		private function validCardNumber($number)
		{
			if(!preg_match('/^([0-9]{4})-([0-9]{3})-([0-9]{2})/', $number))
			{
				echo "false number from validCardNumber<br>";
				return False;
			}
			else{
				echo "right number from validCardNumber<br>";
				return True; 
			} 
		}
	}

	$employee = new Employee();
	$employee->name = "Mario";
	// $salary = $employee->calculateSalary();
	// echo "<br>{$salary}this is <br>";
	// $v1 = new Visitor;
	// $v1->greetVisitor();
	// $v1->setCardNumber("4541-123-14");
	// $card =$v1->cardNumber = "5555-555-55";
	// echo "$card";
	////////////////////////////////////////
	// echo "{$employee->name}<br />";
	// echo $employee->age;
	// echo $employee->name;

//Encapsolation
// class Employee 
// {
// 	private $name;
// 	private $title;
// 	private$city;
// 	protected $wage;

// 	public function __set($propName , $propValue)
// 	{
// 		$this->propName = propValue;
// 		// echo "No Existance value : \$$propName";
// 	}

	// public function __get($propName)
	// {
	// 	echo "__get called!<br />";
	// 	$vars = array("name","city","title");
	// 	if(in_array($propName, $vars))
	// 	{
	// 		return $this->$propName."<br>";
	// 	}
	// 	else
	// 	{
	// 		return "No Such Variable";
	// 	}

	// }
	// private $name;
	// private $title;
	// protected $widge = 50;

	// public function setName($name)
	// {
	// 	$this->name = $name;
	// }
	// public function getName()
	// {
	// 	return $this->name;
	// }
// }
// 	$employee = new Employee();
// 	$employee->name = "Smsm";
// 	// echo "{$employee->name}";
// 	echo "<br>";
// 	$employee->title = "Hakonamatata";
// 	// echo "{$employee->title}";
// 	echo $employee->name;
// 	echo $employee->tec;
// 	echo $employee->title;

// class Programmer extends Employee
// {
// 	public function bonus($percent)
// 	{
// 		echo "bound =".$this->widge * $percent/100;
// 	}
// }
?>
<?php
	// $employee = new Employee();
	// $employee->setName("Salma");
	// echo $employee->getName();
	// $pro = new Programmer();
	// $pro->bonus(00.12);
	// echo $pro->name;
?>
<?php
	class MathFunctions
	{
		const PI = '3.14';
		const E = '2.7182818284';
		const EULER = '0.5772156649';

	}
	// echo MathFunctions::PI;
?>