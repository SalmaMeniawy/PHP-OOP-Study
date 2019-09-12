<?php
class Employee
{
	protected $name ="salma";
	function __construct()
	{
		echo " parent __construct ".$this->getName();
	}
	public function setName($name)
	{
		$this->name = $name;
	}
	public function getName()
	{
		return $this->name;
	}
}
class Ex extends Employee
{

}
$emp = new Ex();
echo $emp->name;
?>