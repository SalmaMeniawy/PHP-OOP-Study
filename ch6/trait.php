	<?php
	trait Log1 {
		public function hello()
		{
			echo "Hello from log1";
		}
		use Log2;
	}
	trait Log2 {
		public function hello1()
		{
			echo "Hello from trait Log2";
		}
	}
	class A{
		private $name;
		function __construct()
		{
			$this->hello();
			$this->hello1();
		}
		use Log1;
		
	}
	$emp = new A;
	// $emp->name = "salma";
	$emp->age =22;//monkey patching
	echo "$emp->age";
	?>