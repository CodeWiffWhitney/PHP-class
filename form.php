<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<form action="form.php" method="post" enctype="application/x-www-form-urlencoded">
	<input name="first_name" type="text" id="first_name">
	<br/>
	<select name="state" id="state">
	  <option value="AZ">Arizona</option>
	  <option value="UT">Utah</option>
	  <option value="CA">California</option>
	</select>
	<br/>
	<input type="submit">
	<br/>
	<?php
	if(empty($_POST)){
		
	}
	else{
	
	echo "<br/>";
		echo $_POST['first_name'];
	echo "<br/>";
	echo $_POST['state'];
	echo "<br/>";
	}
	
	?>

</form>


</body>
</html>