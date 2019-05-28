
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

include("../Conection.php");

$sqlSelect="select Sid,Sname from special";

$resSelect=mysqli_query($con,$sqlSelect);

@$sqlSelectSpecial="select * from special where Sid=".$_REQUEST["specialName"];

$res=mysqli_query($con,$sqlSelectSpecial);



?>



</head>

<body>
<?php
//echo("Welcom ".$_REQUEST["UserName"]);
include("NaveBar.php");


?>
<form action="" method="post" name="f1">
<table width="39%" border="0" align="center">
  <tr>
    <td width="42%">Special Name</td>
    <td width="33%">
    <select name="specialName" id="select">
    <option value="0">--choose--</option>
    <?php
	while($row=mysqli_fetch_array($resSelect))
	{
		echo("<option value='".$row["Sid"]."'>".$row["Sname"]."</option>");
	}
	
	?>
    
    </select>
    </td>
    <td width="25%"><input type="submit" name="button" id="button" value="Search" /></td>
  </tr>
</table>
</form>

<form action="ModifySpecail1.php" method="post" name="f2">

<?php
if(@$row1=mysqli_fetch_array(@$res))
{
?>
  <table width="27%" border="0" align="center" bgcolor="#CCCCCC">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Special Name</td>
      <td><label for="sn"></label>
        <input type="text" name="sn" id="sn"  value="<?php echo($row1["Sname"]);?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
      
      <?php
	  if($row1["Sactivation"] == 1)
	  {
		  echo('<input name="act" type="checkbox" id="act" value="1" checked="checked"/>
        Activation');
	  }
	  else
	  {
		 echo('<input name="act" type="checkbox" id="act" value="1" />
        Activation'); 
	  }
	  ?>
      
      
        
        
        </td>
    </tr>
    <tr>
      <td><input type="hidden" name="Sid" value="<?php echo($row1["Sid"])?>"/></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Button" id="Button" value="Update" />  <input type="submit" name="Button" id="Button" value="Delete" /></td>
    </tr>
  </table>
  <?php
}
mysqli_close($con);
  ?>
</form>

</body>
</html>