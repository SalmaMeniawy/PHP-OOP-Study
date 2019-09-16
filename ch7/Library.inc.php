<?php
	class Clean
	{
		function filterTitle($text)
		{
			// Trim white space and capitalize first word
			return ucfirst(trim($text));
		}	
	}

?>