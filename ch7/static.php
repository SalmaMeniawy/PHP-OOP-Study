<?php
class Employee
{
	public static $favSport = "football";
	public static function 	watchTv()
	{
		echo "watching ".self::$favSport;
	}
	public static function type()
	{
		echo "Hello from type parent function";
	}
}
class Executive extends Employee
{
	public static $favSport = "polp";
	public static function type()
	{
		echo "hello from child class";
	}
	 
}
echo Executive::watchTv();
echo Executive::type();
echo Executive::$favSport;
?>