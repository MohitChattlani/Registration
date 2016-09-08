<!DOCTYPE html>
<html>
<head>
	<title>Register form</title>
	<link rel="stylesheet" type="text/css" href="style/styling.css">
</head>
<body >
<h1>Customer Registration</h1>
<div class="form">
<form action="register.php" method="GET" >
	*Name <input type="text" name="Name" autocomplete="off" placeholder="Enter your name" />
	<br>
	<br>
	*Email Id <input type="text" name="Email" autocomplete="off" placeholder="Enter your email id">
	<br>
	<br>
	City
	 <select name="City">
		<option value=" "></option>
		<option value="Delhi">Delhi</option>
		<option value="Mumbai">Mumbai</option>
		<option value="Bangalore">Bangalore</option>
		<option value="Chennai">Chennai</option>
		<option value="foreign">foreign</option>	
	</select>
	<br>
	<br>
	<input type="submit" value="Register" name="button">
</form>
<p class="asterisk">*All fields marked with asterisk are compulsory</p>
</div>

</body>
</html>
