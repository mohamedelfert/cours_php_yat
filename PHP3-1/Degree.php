<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$Degree = $_REQUEST["name"];


if($Degree <0  | $Degree >100)
{
echo("<script> alert('Invalid Data') </script>");	
}

else
{

if($Degree >=85 )
{
	echo("<script> alert('Excellent') </script>");
	
	}
	elseif($Degree >=75 & $degree < 85)
	{
		echo("<script> alert('Very Good') </script>");
		}
		elseif($Degree >=65 & $degree < 75)
		{
			echo("<script> alert('Good') </script>");
			}
			elseif($Degree >=55 & $degree < 65)
			{
				echo("<script> alert('Accepted') </script>");
				}
			
else
{
	echo("<script> alert('Failed') </script>");
	}	
	
	
}

?>

</body>
</html>