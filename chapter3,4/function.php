<?php
	function displayDate()
	{
		return date('l, F n, Y');
	}
	$date = displayDate(); 
	// echo $date;
	
?>
<?php 
	$colors = ["red","yellow","green","blue"];
	list($color1 ,$color2 , $color3) = $colors;
	// echo "$color1"." "."$color2"." "."$color3";
	// echo "<br> $colors";
	// echo gettype($colors);
	// echo gettype($color1);

?>
<?php 
	function retriveUserProfile()
	{
		$user[] = "SalmaMeniawy";
		$user[] = "Salma@gmail.com";
		$user[] = "English";
		return $user;
	}
	list($name , $email , $language) = retriveUserProfile();
	// echo "$name <br> $email <br> $language <br>";
	// echo "name: {$name} , email : {$email} , language : {$language}";

?>
<?php
	function calculateSalesTax($price , $tax)
	{
		return $price + ($price * $tax);
	}
	$product = calculateSalesTax(15.00 , 0.675);
	// echo $product; 
?>
<?php
	function amortizationTable($paymentNumber ,$periodicPayment ,$balance ,$monthlyInsert)
	{
		static $table = array();
		// Calculate payment interest
		$paymentInterest = round($balance * $monthlyInsert ,2);
		// print($paymentInterest);
		// Calculate payment principal
		$paymentPrincipal = round($periodicPayment - $paymentInterest , 2);
		// Deduct principal from remaining balance
		$newBalance = round($balance - $paymentPrincipal, 2);
		// If new balance < monthly payment, set to zero
		if ($newBalance < $paymentPrincipal)
		{
			$newBalance = 0;
		}
		$table[] = [$paymentNumber,
			number_format($newBalance,2),
			number_format($periodicPayment,2),
			number_format($paymentPrincipal,2),
			number_format($paymentInterest,2)];

		// If balance not yet zero, recursively call amortizationTable()
			if ($newBalance > 0){
				$paymentNumber++;
				amortizationTable($paymentNumber,$periodicPayment,$newBalance ,$monthlyInsert);
			}
		return $table;
	}
	

?>
<?php
	// Loan balance
	$balance = 10000.00;
	// Loan interest rate
	$interestRate = .0575;
	// Monthly interest rate
	$monthlyInterest = $interestRate / 12;
	// Term length of the loan, in years.
	$termLength = 5;
	// Number of payments per year.
	$paymentsPerYear = 12;
	// Payment iteration
	$paymentNumber = 1;

	// Determine total number payments
	$totalPayments = $termLength * $paymentPerYear ;

	// Determine interest component of periodic payment
	$intCalc = 1 + $interestRate / $paymentsPerYear;

	// Determine periodic payment
	$periodicPayment = $balance * pow($intCalc,$totalPayments) * ($intCalc - 1) /
	(pow($intCalc,$totalPayments) - 1);

	// Round periodic payment to two decimals
	$periodicPayment = round($periodicPayment,2);

	$rows = amortizationTable($paymentNumber, $periodicPayment, $balance,
	$monthlyInterest);


	// Create table
	// echo "<table>";
	// echo "<tr>
	// <th>Payment Number</th><th>Balance</th>
	// <th>Payment</th><th>Principal</th><th>Interest</th>
	// </tr>";
	// foreach($rows as $row) {
	// 	printf("<tr><td>%d</td>", $row[0]);
	// 	printf("<td>$%s</td>", $row[1]);
	// 	printf("<td>$%s</td>", $row[2]);
	// 	printf("<td>$%s</td>", $row[3]);
	// 	printf("<td>$%s</td></tr>", $row[4]);
	// }
	// // Close table
	// echo "</table>";



?>
<?php 
	$example = function(){
		echo "closure";
	}

?>
<?php
	// $example();
	function MyEcho(){
		echo "closure two";
	};
	$myexample = "MyEcho";
	// $myexample();

	$a = 15;
	$example = function(){
		$a += 100;
		echo "$a"."\n";

	};
	// $example();
	$a = 15;
	$example = function() use ($a){
		$a += 100;
		echo "$a"."\n";

	};
	// $example();

	$a = 15;
	$example = function() use (&$a){
		$a += 100;
		echo "$a"."\n";

	};
	// $example();

?>
<?php 
	$usernames = array("Ali","mama" , "missing" , "koko");
	for($x=0 ; $x < count($usernames);$x++)
	{
		if ($usernames[$x] == "missing") continue;
		{
			printf("Staff member: %s <br />", $usernames[$x]);

		}
	}
?>