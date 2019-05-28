<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 04/02/2019
 * Time: 08:13 م
 */
$number1 = $_REQUEST["num1"];
$number2 = $_REQUEST["num2"];
$div     = $_REQUEST["div"];
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
            <label>Start : </label>
            <input type="text" value="<?php echo $number1;?>">
            <label>End : </label>
            <input type="text" value="<?php echo $number2;?>">
            <label>Div : </label>
            <input type="text" value="<?php echo $div;?>">
        </form>
    </body>
</html>
<?php
if ($number1 == null or $number2 == null or $div == null){
    echo "<script>alert('لا يجب ترك حقل فارغ !!!!')</script>";
    header("refresh: 0.1; index.php");
}elseif ($div > $number1 and $div > $number2) {
    echo "<script>alert('الرقم المضاعف أكبر من الرقمين المطلوب مضاعفة الأعداد بينهم !!!!')</script>";
    header("refresh: 0.1; index.php");
}elseif ($div == 0) {
    echo "<script>alert('القسمة علي صفر غير معرفة  !!!!')</script>";
    header("refresh: 0.1; index.php");
}else{
    if ($number1 < $number2){
        while ($number1 <= $number2){
            if($number1 % $div == 0){
                echo "<div>" . $number1 . "</div>";
            }
            $number1++;
        }
    }else{
        while ($number1 >= $number2){
            if($number2 % $div == 0){
                echo "<div>" . $number2 . "</div>";
            }
            $number2++;
        }
    }
}
?>
</br>
<a href="index.php">الرجوع للصفحة الرئيسية</a>
