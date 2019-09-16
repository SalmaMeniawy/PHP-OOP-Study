<?php
	namespace DataCleaner;

	class Clean
	{
		function removeProfanity($text)
		{
			$badwords = array("idiotic"=>"shortsighted",
							  "moronic"=>"unreasonable",
							  "insane"=>"illogical");
			// Replace bad words
			return strtr($text,$badwords); 	

		}
	}
?>