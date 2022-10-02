<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<form action="conditionals.php" method="post">
	<fieldset>
		<legend>Contact Us</legend>
		<label>Username:</label>
		<input type="text" name="username" />
		<br/>
		<label>Email: </label>
		<input type="email" name="email" />
		<br/>
		<label>Message:</label>
		<textarea name="message" cols="60" rows="6"></textarea>
		<br/>
		<input type="submit" value="Send Message" />
	</fieldset>
</form>
		

<?php

if($_POST){
	
 	
	$first_name = $_POST["username"];

	if($first_name == "Whitney"){
		echo "Welcome ".$first_name;
		 }
	elseif($first_name == "Yoda"){
		echo"Welcome Master ".$first_name;
	}
	else{
		echo "Go away you are not a member";
	}

}		  
?>

</body>
</html>
