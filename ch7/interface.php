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
			echo "Call CFO and ask to transfer funds to Swiss bank account.";

		}
		function burnDocuments()
		{
			echo "truch the echo suite";
		}
	}
?>