<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
//conditional statment
$x=0;
$y=5;

/*
if($x>$y)
{
echo($x.">".$y)	;
}
*/

/*
if($x>$y)
{
echo($x.">".$y)	;
}
else
{
	echo($x."<".$y)	;
}


echo($x>$y?($x.">".$y):($x."<".$y));
*/
if($x>$y)
{
echo($x.">".$y)	;
}
else if($x == $y)
{
	echo($x."=".$y)	;
}
else
{
	echo($x."<".$y)	;
}
?>
</body>
</html>