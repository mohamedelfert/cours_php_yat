
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


?>
<form action="AddSpecial1.php" method="post">
<table width="27%" border="0" align="center" bgcolor="#CCCCCC">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Special Name</td>
    <td><label for="sn"></label>
      <input type="text" name="sn" id="sn"  required="required"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="act" type="checkbox" id="act" value="1" />
      Activation</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="AddButton" id="AddButton" value="Add" /></td>
  </tr>
</table>

</form>

</body>
</html>