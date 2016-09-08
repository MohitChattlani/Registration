<?php
$servername = "localhost";
$username="root";
$password="password";
$dbName = "five star";

$con = mysqli_connect($servername, $username,$password,$dbName);


if(!$con) 
{
	die("Connection failed: " . mysqli_connect_error());
} 
