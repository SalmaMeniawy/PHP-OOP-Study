<?php
//we need to create abstract class 
abstract class Employee
{
	abstract function hire();
	abstract function fire();
	abstract function promote();
	abstract function demote();
	//final keyword to prevent the overridden by subclass
	// final function getName();
}

?>
<?php
	class Book
	{
		private $title;
		private $isbn;
		private $copies;
		public $play ="MIS";

		function __construct($isbn)
		{
			$this->setIsbn($isbn);
		}
		public function setIsbn($isbn)
		{
			$this->isbn = $isbn;
			echo "setIsbn function";
		}
		function __destruct()
		{
			echo "<br>the destruct of Book called <br>";
		}
	}
	// $book = new Book("0121534214");
?>
<?php
class Visitor
{
	private static $visitors = 0;
	function __construct()
	{
		self::$visitors ++;
	}
	static function getVisitors()
	{
		return self::$visitors;
	}
	public function play()
	{
		echo "Play !!!!";
	}
}
	$v1 = new Visitor;
	$v1->play();
	echo Visitor::getVisitors();
	$v2 = new Visitor;
	echo Visitor::getVisitors();

	$v3 = new Visitor;
	echo Visitor::getVisitors();

var_dump(get_class_vars(Book));
echo "<br>";
// var_dump(get_declared_classes());
var_dump(get_object_vars($book));
?>