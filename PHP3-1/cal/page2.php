<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$namber1=$_POST["namber1"];
$namber2=$_POST["namber2"];
$op=$_REQUEST["op"];
//$sum=$namber1+$namber2;
$res;
if($namber1 =="" ||$namber2 == null)
{
	//die not echo
	die("num1 or num2 empty");
}


switch($op)
{
	case "+":
	/*echo("<script>alert('".($namber1+$namber2)."');</script>");*/
     $res=$namber1+$namber2;
	break;
	
	case "-":
	/*echo("<script>alert('".($namber1+$namber2)."');</script>");*/
     $res=$namber1-$namber2;
	break;
	
	case "*":
	/*echo("<script>alert('".($namber1+$namber2)."');</script>");*/
     $res=$namber1*$namber2;
	break;
	
	case "/":
	if($namber2 == 0)
	{
		die("<script>alert(' Division by zero');</script>");
	}
	else
	{
	
     $res=$namber1/$namber2;
	}
	break;
}


echo("<script>alert('".$res."');</script>");


?>
</body>
</html>