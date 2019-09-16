<?php
	interface iPillage{
		function emptyBankAccount();
		function burnDocuments();
	}
	class Employee
	{

	}
	class Executive extends Employee implements iPillage
	{
		private $totalStockOption;
		function emptyBankAccount()
		{
			echo "Call CFO and ask to transfer funds to Swiss bank account.<br>";

		}
		function burnDocuments()
		{
			echo "truch the echo suite";
		}
	}
	class Assistant extends Employee implements iPillage
	{
		function takeMemo()
		{
			echo " Memo taking .... ";
		}
		function emptyBankAccount()
		{
			echo "Go on shopping spree with office credit card.<br>";

		}
		function burnDocuments()
		{
			echo "Start small fire in the trash can.";

		}
	}
	$emp = new Executive();
	$emp->emptyBankAccount();

	$emp1 = new Assistant();
	$emp1->emptyBankAccount();
	$emp1->takeMemo();
	echo interface_exists(iPillage);
?>