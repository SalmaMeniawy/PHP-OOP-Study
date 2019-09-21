<?php
$userInput = "I am going to hax0r your site, hahaha!
	<script type='text/javascript'>
	window.location = 'http://www.example.com/'
	</script>'";

$userInputEntities = htmlentities($userInput);
echo "$userInputEntities<br>";

?>
<?php
$input = "I <td> really </td> love <i> PHP </i>";
//echo "$input";
$input = strip_tags($input,"<i> </i>");
//echo "$input";
$email = "salma@@gmail.com";
if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
	// echo " Invalid Email";
}

?>
<select name="languages[]" multiple="multiple">
	<option value="csharp">C#</option>
	<option value="javascript">JavaScript</option>
	<option value="perl">Perl</option>
	<option value="php" selected>PHP</option>
</select>
<p>
	<input type="submit" name="submit" value="submit">
</p>
<?php
	if(isset($_POST['submit']))
	{
		echo "You like the following languages:<br>";
		if(is_array($_POST['languages']))
		{
			foreach($_POST['languages'] AS $language) {
				$language = htmlentities($language);
				echo "$language<br>";
				}

		}
	}

?>