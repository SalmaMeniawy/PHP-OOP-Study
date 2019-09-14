<?php
class Employee
{
	public static $favSport = "football";
	public static function 	watchTv()
	{
		echo "watching ".self::$favSport;
	}
}
class Executive extends Employee
{
	public static $favSport = "polp";
	
}
?>