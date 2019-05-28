<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

/*
//array
//define
$names[]=array();
//assignment
$names[1]="sara";
$names[3]="mohamed";
$names[0]="Ali";

//echo($names[3]);

//echo($names[4]);  //run time error
*/

/*
$age=array(10,15,30,70);

for($i=0;$i<4;$i++)
{
	echo($age[$i]."<br>");	
}
*/
$nums=array(5);
/*
for($s=0;$s<5;$s++)
{
	$nums[$s]=($s+1)*5;
}
*/

/*
for($s=1;$s<=5;$s++)
{
	$nums[$s-1]=$s*5;
}
*/

/*
$a=5;
for($s=0;$s<5;$s++)
{
	$nums[$s]=$a;
	$a+=5;
}
*/
/*
$age=array(1=>5,11,18,66);

for($s=1;$s<=4;$s++)
{
	//echo($age[$s]."<br>");
	
	echo("age[".$s."]=".$age[$s]."<br>");
}
*/

/*
$employee=array(10=>"Ahmed",15=>"Ali",19=>"sara");

foreach($employee as $r)
{
echo($r);
echo("<br>");	
}
*/


$age=array("Ahmed"=>20,"Ali"=>30,"mohamed"=>35);

//echo($age["Ali"]);
/*
$_POST[]
$_GET[]
$_REQUEST[]
*/



$arr=array(array(1,2,3),
           array(5,6,7,5));
		   
		   //echo($arr[1][1]);
		  // echo($arr[0][2]);
	/*	  
for($i=0;$i<2;$i++)
{
for($x=0;$x<=2;$x++)
{
	echo($arr[$i][$x]."-");
}
echo("<br>");
}
*/



for($i=0;$i<count($arr);$i++)
{
for($x=0;$x<count($arr[$i]);$x++)
{
	echo($arr[$i][$x]."-");
}
echo("<br>");
}


?>
</body>
</html>