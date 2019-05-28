<?php
include("session.php");
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
include("NaveBar.php");

//1
include("../Conection.php");

//2
$sql="select Did,fullName from doctorapproval where Approval=0";

$res=mysqli_query($con,$sql);

if(mysqli_num_rows($res)>0)
{
	echo("<table>");
	
	while($row=mysqli_fetch_array($res))
	{
		/*
		echo("<tr>");
		echo("<td>");
		echo("<a href='Aprovale.php?did=".$row["Did"]."'>");
		echo($row["fullName"]);
		echo("</a>");
		echo("</td>");
		echo("</tr>");
		*/
		
		echo("<tr><td><a href='Aprovale.php?did=".$row["Did"]."'>".$row["fullName"]."</a></td></tr>");
	}
	
	echo("</table>");
}
else
{
	echo("<script>alert('No Data Found');</script>");
}

?>


</body>
</html>