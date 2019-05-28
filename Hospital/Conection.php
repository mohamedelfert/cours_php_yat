

<?php
//1
//mysqli_connect("Server Name","server user name","server password");
$con=mysqli_connect("localhost","root","");

if(!$con)
{
	die("Error : ".mysqli_error());
}

//2
//select database

$db=mysqli_select_db($con,"hospital30_9");

if(!$db)
{
	die(mysqli_error());
}


?>