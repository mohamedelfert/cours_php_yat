<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php
include("header.php");
?>
<style type="text/css">
#form1 table tr td #login {
	text-align: center;
}
#form1 table {
	text-align: center;
}
</style>
</head>

<body>
<table width="100%" height="512" border="0" align="center">
  <tr>
    <td width="16%" height="173"><img src="img/download.png" width="296" height="171" /></td>
    <td colspan="2" bgcolor="#EEEEEE">&nbsp;</td>
  </tr>
  <tr>
    <td height="51" colspan="3"><?php include("HomeNavBar.php");?> </td>
  </tr>
  <tr>
    <td height="254">&nbsp;</td>
    <td width="69%"><form id="form1" name="form1" method="post" action="login1.php">
      <table width="47%" border="0">
        <tr>
          <td width="22%">&nbsp;</td>
          <td width="78%">&nbsp;</td>
        </tr>
        <tr>
          <td>username</td>
          <td><input type="text" name="un" id="un" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>password</td>
          <td><input type="password" name="pw" id="pw" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="checkbox" name="rm" id="rm" />
            Remember Me</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><a href="DoctorReg.php">sign up</a></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="login" id="login" value="Login" /></td>
        </tr>
      </table>
    </form></td>
    <td width="15%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
</body>
</html>