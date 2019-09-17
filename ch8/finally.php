<?php
	$fh = fopen("context.txt", "r");
	print_r($fh);
	try
	{
		if(!fwrite($fh, "Adding new context"))
		{
			throw new Exception("Could not open the File !!!");
		}
	}catch(Exception $e)
	{
		echo "Error !! File name".$e->getFile()."<br>"."Line".$e->getLine()."<br>"."Message : ".$e->getMessage();
	}
	finally{
		echo "<br> Bye Bye Bye!!!";
		fclose($fh);
	}

?>