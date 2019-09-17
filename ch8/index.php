<?php
// $array = array(4,5,7,8);
// {
// foreach($array as $index)
// echo "$index";
// }
// ini_set(error_reporting, E_ALL)
// error_log("Hello you need to be more focuse");
// error_log("Hi from php script " ,3,"./error");
try{
	$fh = fopen("context.txt", "r");
	if (!$fh)
	{
		throw new Exception("Could not open the file!!");
	}
}catch(Exception $e)
{
	echo"Error (File: ".$e->getFile().", line".$e->getLine()."): ".$e->getMessage();
}
// //try "try and catch"
// try{
// 	print("Hello Guys");
// 	if(!fopen("koko","r"))
// 	{
// 		throw IOexception("Could not find the file");
// 	}
// }catch (IOexception $e)
// {
// 	echo "string";
// }
// $zee=Null ;
// try{
// 	printf("hello from secpond example");
	
// 	if($zee == Null)
// 	{
// 		throw Exception();
// 	}
// }catch(Exception  $e){
// 	echo "there is no value";
// }
// throw new Exception();
?>