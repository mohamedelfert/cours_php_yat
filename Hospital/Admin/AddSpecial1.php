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
//1
if(trim($_REQUEST["sn"]) =="")
{
	echo("<script>alert('Special name Empty')</script>");
}
else
{
	include("../Conection.php");
	
	
	$sqlSelect="select * from special where Sname='".trim($_REQUEST["sn"])."'";
	
	$resSelect=mysqli_query($con,$sqlSelect);
	
	if($row=mysqli_fetch_array($resSelect))
	{
		echo("<script>alert('Data exist')</script>");
	}
	else
	{
	
	$act=0;
	if(@$_REQUEST["act"]==1)
	{
		$act=1;
	}
	
	//$sqlInsert="insert into special(Sname,Sactivation) values('".$_REQUEST["sn"]."',".$act.")";
	
	$sqlInsert="insert into special(Sname,Sactivation) values('".trim($_REQUEST["sn"])."',".(@$_REQUEST["act"]==1?1:0).")";
	
	$resInsert=mysqli_query($con,$sqlInsert);
	
	echo("<script>alert('Data Inserted')</script>");
	}
	
	mysqli_close($con);
}

?>
</body>
</html>