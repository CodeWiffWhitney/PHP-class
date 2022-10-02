<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	//this is a string variable
	$blah = "This is nifty! Wow wee this is sooooooooo coool!!!";
	//this is an integer variable
	$cool = 55;
	// this is a float alue with a decimal place
	$nifty = 12.12;
	// this is a boolean value (true or false)
	$another = true;
	
	//this is a array (a set of values)
	$thing = [10,20,30];
	
	echo $blah;
	echo "<br/>";
	echo $cool;
	echo "<br/>";
	echo $nifty;
	echo "<br/>";
	echo $another;
	echo "<br/>";
	print_r($thing);
	echo "<br/>";
	echo $thing[1];
	
	

?>

</body>
</html>