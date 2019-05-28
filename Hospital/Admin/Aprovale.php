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
$sql="select * from doctors where Did=".$_REQUEST["did"];
$res=mysqli_query($con,$sql);



//2
$sql1="select Sid,Sname from special where SActivation =1";


//3
$res1=mysqli_query($con,$sql1);

?>
<form action="DoctorReg1.php" method="post" enctype="multipart/form-data" name="form1" id="form1">

<?php
if($row=mysqli_fetch_array($res))
{
?>

  <table width="77%" border="0">
    <tr>
      <td width="25%">&nbsp;</td>
      <td width="75%">&nbsp;</td>
    </tr>
    <tr>
      <td>First Name</td>
      <td><label for="fn"></label>
        <input type="text" name="fn" id="fn" value="<?php $row["DFName"] ?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td><input type="text" name="ln" id="ln" value="<?php $row["DLName"] ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Address</td>
      
      <td><textarea name="address" id="address" cols="20" rows="5">
      
      <?php $row["DAddress"] ?>
      </textarea>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Phone</td>
      <td><input type="tel" name="phone" id="phone"  value="<?php $row["DPhone"] ?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Mobile</td>
      <td><input type="tel" name="mobile" id="mobile" value="<?php $row["DMobile"] ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>National ID</td>
      <td><input type="text" name="NID" id="NID" value="<?php $row["NationalID"] ?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="email" name="email" required="required" value="<?php $row["email"] ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Gender</td>
      <td>
      
      <?php
      if($row["gender"] == 1)
	  {
      
  echo('    <input name="gender" type="radio" id="radio" value="m"     />
        Male
        <input type="radio" name="gender" id="radio2" value="f" checked="checked"/>
        Female ');
	  }
	  else
	  {
		   echo('    <input name="gender" type="radio" id="radio" value="m"   checked="checked"  />
        Male
        <input type="radio" name="gender" id="radio2" value="f" />
        Female ');
	  }
        ?>
        </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Special</td>
      <td><select name="special" id="special">
        <option value="0">--choose--</option>
        <?php
		  
		  //4
		  while($row1=mysqli_fetch_array($res1))
		  {
			  
			 if($row1["Sid"] == $row["Sid"]) 
			  {
			  echo("<option value='".$row1["Sid"]."' selected='selected'>".$row1["Sname"]."</option>");
			  }
			  else
			  {
				 echo("<option value='".$row1["Sid"]."' >".$row1["Sname"]."</option>"); 
			  }
			  
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
        <td>
        <input type="text" name="DOF" value="<?php $row["DateOfBirth"] ?>" readonly="readonly"/>
         </td>
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
      <td><input type="file" name="photo" id="photo"  /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>salary</td>
      <td><input type="salary" name="email2" required="required" value="<?php $row["email"] ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>manager</td>
      <td><select name="manager" id="manager">
      </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="checkbox" name="act" id="act" />
        Activation</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="checkbox" name="Apr" id="Apr" /> 
        Approval</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Approve" /></td>
    </tr>
  </table>
  <?php
}
mysqli_close($con);
  ?>
</form>
</body>
</html>