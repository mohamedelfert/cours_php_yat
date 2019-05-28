<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php
include("header.php");

//1
include("Conection.php");


//2
$sql="select Sid,Sname from special where SActivation =1";


//3
$res=mysqli_query($con,$sql);




?>
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
    <td width="69%"><form action="DoctorReg1.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <table width="77%" border="0">
        <tr>
          <td width="25%">&nbsp;</td>
          <td width="75%">&nbsp;</td>
        </tr>
        <tr>
          <td>First Name</td>
          <td><label for="fn"></label>
            <input type="text" name="fn" id="fn" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Last Name</td>
          <td><input type="text" name="ln" id="ln" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Address</td>
          <td><textarea name="address" id="address" cols="20" rows="5"></textarea></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Phone</td>
          <td><input type="tel" name="phone" id="phone" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Mobile</td>
          <td><input type="tel" name="mobile" id="mobile" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>National ID</td>
          <td><input type="text" name="NID" id="NID" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="email" name="email" required="required" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Gender</td>
          <td><input name="gender" type="radio" id="radio" value="m" checked="checked" /> 
            Male   <input type="radio" name="gender" id="radio2" value="f" />
            Female</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Special</td>
          <td>
          
          <select name="special" id="special">
          <option value="0">--choose--</option>
          <?php
		  
		  //4
		  while($row=mysqli_fetch_array($res))
		  {
			  echo("<option value='".$row["Sid"]."'>".$row["Sname"]."</option>");
		  }
		  ?>
          
          
          </select></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Date Of Birth</td>
          <td><table width="50%" border="0">
            <tr>
              <td><select name="day">
                <option>day</option>
                <?php
   for($i=1;$i<=31;$i++)
   {
	   echo("<option>".$i."</option>");
   }
   ?>
              </select></td>
              <td><select name="month">
                <option>month</option>
                <?php
	$x=1;
	while($x<=12)
	{
	 echo("<option>".$x."</option>");
	 $x++;	
	}
	
	?>
              </select></td>
              <td><select name="year">
                <option>year</option>
                <?php
	$s=1920;
	do
	{
	echo("<option>".$s."</option>");
	$s++;	
	}
	while($s<=date("Y"));
	?>
              </select></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Photo</td>
          <td><input type="file" name="photo" id="photo" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="button" id="button" value="Reg" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form></td>
    <td width="15%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>

<?php
mysqli_close($con);
?>
</body>
</html>