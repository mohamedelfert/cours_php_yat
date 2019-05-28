<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Sum method [ get ]</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<?php
        $number1 = $_REQUEST["num1"];
        $number2 = $_REQUEST["num2"];
        $op = $_REQUEST["op"];
        if ($number1 == null or $number2 == null) {
            echo "<script>alert('لا يجب ترك حقل فارغ  !!!!')</script>";
            header("refresh: 0.1; index.php");
        }
        function Calc($number1,$number2,$op){
            switch ($op) {
                case "+" :
                    $res = $number1 + $number2;
                    break;
                case "-" :
                    $res = $number1 - $number2;
                    break;
                case "*" :
                    $res = $number1 * $number2;
                    break;
                case "/" :
                    if ($number2 == 0) {
                        echo "<script>alert('القسمة علي صفر غير صحيحة  !!!!')</script>";
                        header("refresh: 0.1; index.php");
                    } else {
                        $res = $number1 / $number2;
                    }
                    break;
            }
            echo $res;
        }
		?>
        <section>
            <form>
                <div>
                    <lable>number1 : </lable>
                    <input type="text" value="<?php echo $number1 ?>">
                </div>
                <div>
                    <lable>number2 : </lable>
                    <input type="text" value="<?php echo $number2 ?>">
                </div>
                <div>
                    <lable><?php echo $op ." :" ?></lable>
                    <input type="text" value="<?php Calc($number1,$number2,$op) ?>">
                </div>
                <a href="index.php">الرجوع للصفحة الرئيسية</a>
            </form>
        </section>
	</body>
</html>

