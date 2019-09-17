<?php

	/* The InvalidEmailException class notifies the
	administrator if an e-mail is deemed invalid. */

	class InvalidEmailException extends Exception
	{
		function __construct($message ,$email)
		{
			$this->email = $email;
			$this->message = $message;
		}
	}
?>