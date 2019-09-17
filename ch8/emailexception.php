<?php

	/* The InvalidEmailException class notifies the
	administrator if an e-mail is deemed invalid. */

	class InvalidEmailException extends Exception
	{
		function __construct($message ,$email)
		{
			$this->message = $message;
			$this->notifyAdmin($email) ;
		}
		private function notifyAdmin($email)
		{
			mail("admin@example.org", "invalid Email",$email,"From:web@gmail.com");
		}
	}
	/* The Subscribe class validates an e-mail address
	and adds the e-mail address to the database. */
	class Subscribe {
		function validateEmail($email)
		{
			try 
			{

				if($email == "")
				{
					throw new Exception("
						you must enter the Email Address ");
				}else{
					list($user , $domain) = explode("@",$email);
					if(!checkdnsrr($domain , "MX"))
					{
						throw new InvalidEmailException("Invalid Email Address" ,$email);
					}else{
						return 1 ;
					}
				}
			}catch(Exception $e)
			{
				echo $e->getMessage();
			}
			catch(InvalidEmailException $e)
			{
				echo $e->getMessage();
				$e->notifyAdmin($email);
			}
		}
		/* Add the e-mail address to the database */
		function subscribeUser()
		{
			echo $this->email."add to the database !!";
		}

	}
	// Assume that the e-mail address came from a subscription form
	$POST['email'] = "someuser@example.com";

	/* Attempt to validate and add address to database. */
	if(isset($POST['email']))
	{
		$subscribe = new Subscribe();
		if($subscribe->validateEmail($POST['email']))
			$subscribe->subscribeUser($POST['email']);
	}
?>