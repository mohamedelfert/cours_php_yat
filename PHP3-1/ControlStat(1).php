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

/*
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

*/
/*
//switch
$choice='F';

switch($choice)
{
	case 'A':
	echo("Your Choice is ".$choice);
	break;
	
	case 'B':
	echo("Your Choice is ".$choice);
	break;
	
	case 'C':
	echo("Your Choice is ".$choice);
	break;
	
	case 'D':
	echo("Your Choice is ".$choice);
	break;
	
	default:
	echo("wrong choice");
	break;
}
*/
//////////////////////////////

//loop
/*
$x=0;
while($x<=10)
{
	echo($x);
	echo("<br/>");
	$x++;
}
*/

/*
$x=10;
while($x>=0)
{
	echo($x);
	echo("<br/>");
	$x--;
}
*/



/*
$x=0;
while($x<=10)
{
	echo($x);
	echo("<br/>");
	$x+=2;
}
*/



/*
$x=0;
while($x<=10)
{
	if($x%2 == 0)
	{
	echo($x);
	echo("<br/>");	
	}
	$x++;
}
*/


/*
$x=1;

if($x%2==0)
{
		while($x<=10)
		{
			echo($x);
			echo("<br/>");
			$x+=2;
		}	
}
else
{
	$x+=1;
	while($x<=10)
		{
			echo($x);
			echo("<br/>");
			$x+=2;
		}	
}
*/


/*
$x=1;
$x=($x%2==0?$x:$x+=1);
while($x<=10)
		{
			echo($x);
			echo("<br/>");
			$x+=2;
		}
		
		*/
		
//do   while

/*
$x=0;
do
{
	echo($x);
	echo("<br/>");
	$x++;
}
while($x>=10);
*/

/*
$x=0;
do
{
	echo($x);
	echo("<br/>");
	$x++;
}
while($x<=10);

*/

//for

/*
for($i=0;$i<=10;$i++)
{
	echo($i);
	echo("<br/>");
}

*/
/*
for($i=10;$i>=0;$i--)
{
	echo($i);
	echo("<br/>");
}
*/

/*
for($i=0;$i<=10;$i++)
{
	
	echo($i);
	echo("<br/>");
	if($i==5)
	{
		break;
	}
	
	//echo($i);
	//echo("<br/>");
}
*/


for($i=0;$i<=10;$i++)
{
	
	
	if($i==5 ||$i==7)
	{
		continue;
	}

	echo($i);
	echo("<br/>");
}
?>
</body>
</html>