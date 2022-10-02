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
	
 	
	$to_who = "wjohns84@bruinmail.slcc.edu";
	$subject = "A new form contact message was submitted";
	$from = $_POST["email"];
	$message = $_POST["username"]. " " .$_POST["message"];
	$headers = 'From: '.$from;
	
	$result = mail($to_who, $subject, $message, $headers);

	if($result){
		echo "Thanks for your message, we'll be in touch shortly.";
	}
	else{
		echo "Something went wrong. Please try again";
	}
}		  
?>

</body>
</html>
