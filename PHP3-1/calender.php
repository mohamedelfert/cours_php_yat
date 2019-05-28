<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="50%" border="0">
<form>
  <tr>
    <td>
    <select name="day">
    <option>day</option>
   <?php
   for($i=1;$i<=31;$i++)
   {
	   echo("<option>".$i."</option>");
   }
   ?>
    </select>
    </td>
    <td>
    <select name="month">
    <option>month</option>
    <?php
	$x=1;
	while($x<=12)
	{
	 echo("<option>".$x."</option>");
	 $x++;	
	}
	
	?>
    
    
    </select>
    </td>
    <td>
    <select name="year">
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
    </select>
    </td>
  </tr>
  </form>
</table>

</body>
</html>