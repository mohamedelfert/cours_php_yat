<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 04/02/2019
 * Time: 04:46 م
 */
/*
@$number1 = $_REQUEST["num1"];
@$number2 = $_REQUEST["num2"];
@$div     = $_REQUEST["div"];
if ($number1 < $number2){
    while ($number1 <= $number2){
        if($number1 % $div == 0){
            echo $number1 . "</br>";
        }
        $number1++;
    }
}else{
    while ($number1 >= $number2){
        if($number2 % $div == 0){
            echo $number2 . "</br>";
        }
        $number2++;
    }
}
*/
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Div</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="div.php" method="get">
            <input type="text" name="num1" placeholder="Enter Number 1">
            <input type="text" name="num2" placeholder="Enter Number 2">
            <input type="text" name="div" placeholder="Enter div">
            <input type="submit" value="div">
        </form>
    </body>
</html>
