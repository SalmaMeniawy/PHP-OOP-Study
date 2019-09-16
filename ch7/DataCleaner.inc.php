<?php
	namespace DataCleaner;
	use Library;
	use DataCleaner;
	// Instantiate the Library's Clean class
	$filter = new Library\Clean();
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