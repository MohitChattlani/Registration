<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style/table.css">
</head>
<body>
<?php if (empty($_GET["Name"]) || empty($_GET["Email"])): ?>
	<pre style="font-size:30px;">
	You have not filled the required fields.
	Please fill it <a href="form1.php">back</a>
	</pre>
<!-- Entering data into Database !-->
<div class="msg">
<?php else: 
	require_once(__DIR__."/../templates/connec.php");
	if (isset($_GET["button"])) 
	{
		$name=$_GET["Name"];
		$city=$_GET["City"];
		$email=$_GET["Email"];		
	}
	$sql="INSERT INTO users (name,email,city) VALUES ('$name','$email','$city')";
	$in=mysqli_query($con,$sql);
	//to handle the font displayed above the table based on user already exists or not and also sends email accordingly.
	require("font.php");
?>
</div>
		<table>
			<?php foreach($_GET as $key=>$val) :?>
			<tr class="row">
				<td class="key"><?= $key ?></td>
				<td class="value"><?= $val?></td>
			</tr>
			<?php endforeach;?>
		</table>
<?php endif; ?>
</body>
</html>