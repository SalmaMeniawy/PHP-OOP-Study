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
	}
?>