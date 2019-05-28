<?php
include("session.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

if(trim($_REQUEST["sn"]) =="")
{
	echo("<script>alert('Special name Empty')</script>");
}
else
{
	include("../Conection.php");
	if($_REQUEST["Button"] =="Update")
	{
	//update
	$sqlUpdate="update special set Sname='".trim($_REQUEST["sn"])."',Sactivation=".(@$_REQUEST["act"]==1?1:0)." where Sid=".$_REQUEST["Sid"];
	
	$resUpdate=mysqli_query($con,$sqlUpdate);
	echo("<script>alert('Data updated')</script>");
	
	}
	else
	{
		//delete
		$sqlDelete="update special set Sactivation=0 where Sid=".$_REQUEST["Sid"];
	$resDelete=mysqli_query($con,$sqlDelete);
	echo("<script>alert('Data Deleted')</script>");	
		
	}
	
	mysqli_close($con);
}

?>
</body>
</html>