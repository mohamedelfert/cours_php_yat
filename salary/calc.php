<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 01/02/2019
 * Time: 01:15 ص
 */
$hours = $_POST["H"];
if ($hours < 0){
    echo "<script>alert('الرقم المدخل أقل من 0 ساعه')</script>";
    header("refresh: .1; salary.php");
}elseif($hours == null){
    echo "<script>alert('أدخل عدد ساعات !!!')</script>";
    header("refresh: .1; salary.php");
}else{
    if($hours >= 0 and $hours <= 40){
        $salary = $hours * 5;
    }elseif ($hours > 40){
        $extra   = $hours - 40;
        $E       = $extra * 10;
        $hours   = $hours - $extra;
        $salary  = ($hours * 5) + $E;
    }
}
?>
<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <form>
            <label>الساعات :</label>
            <input type="text" value="<?php echo $hours." ساعة " ?>">
            <label>المرتب :</label>
            <input type="text" value="<?php echo "$ ".$salary ?>">
            <?php echo "<a href='salary.php'>الرجوع للصفحة الرئيسية</a>" ?>
        </form>
    </body>
</html>