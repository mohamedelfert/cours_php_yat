
<?php

session_start();

if(@$_SESSION["name"] =="")
{
	die("You don't have permesion");
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<?php
include("../header.php");
?>



</head>

<body>
<?php
//echo("Welcom ".$_REQUEST["UserName"]);

echo("Welcom ".$_SESSION["name"]);
include("NaveBar.php");
?>


</body>
</html>