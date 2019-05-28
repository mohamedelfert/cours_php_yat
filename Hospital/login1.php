
<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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




if($_REQUEST["un"]=="" ||$_REQUEST["pw"]=="" )
{
	echo("User Name Or Password Empty");
}
else
{
//3
//

$sql="select concat(DFName,' ',DLName) as FullName,IsAdmin from doctors where DActivation=1 and Email='".$_REQUEST["un"]."' and password='".$_REQUEST["pw"]."'"	;

//echo($sql);
//4
$res=mysqli_query($con,$sql);

//5
if($row=mysqli_fetch_array($res))
{
	
	if($row["IsAdmin"]==1)
	{
		//header('Location: http://localhost:82/PHP3-1/Hospital/Admin/AdminHome.php');
		
		//header('refresh:1;Admin/AdminHome.php');
		
		
		
		$_SESSION["name"]=$row["FullName"];
		
		header('refresh:1;Admin/AdminHome.php');
		//header('refresh:1;Admin/AdminHome.php?UserName='.$row["FullName"]);
	}
	else
	{
		//header('Location: http://localhost:82/PHP3-1/Hospital/Member/MemberHome.php');
	}
	
	//echo($row["FullName"]);
	//echo($row[0]);
}
else
{
	echo("User not found");
}

//close connection

mysqli_close($con);
}
?>


</head>

<body>
</body>
</html>