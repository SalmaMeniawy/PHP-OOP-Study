<?php
	//define base class
	class Employee
	{
		protected $name;
		//create setter and getter for name
		function setName($name)
		{
			if($name=="")
				{
					echo "Name can n't be Blank !!!";
				}
			else 
			{
				$this->name = $name;
			}	
		}
		//define getter for name
		function getName()
		{
			return "My name is {$this->name}<br>";
		}
	}
	class Executive extends Employee
	{
		//create function
		function pillageCompany()
		{
			echo "I am selling company assets to finance my yachet !!";
		}

	}
?>
<?php
	//create new instance "object"from executive class
	$exec = new Executive();

	//call setmethod for name
	$exec->setName("Ricky");

	//call get method for name
	echo $exec->getName();
	

	//call pillageCompany method
	$exec->pillageCompany();

?>