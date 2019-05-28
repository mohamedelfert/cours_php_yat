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
		$sum     = $number1 + $number2;
		if ($number1 == null or $number2 == null){
            echo "<script>alert('لا يجب ترك حقل فارغ  !!!!')</script>";
            header("refresh: 0.1; sum.php");
        }
		?>
        <section>
            <form>
                <div>
                    <lable>number1 : </lable>
                    <input type="text" value="<?php echo"$number1" ?>">
                </div>
                <div>
                    <lable>number2 : </lable>
                    <input type="text" value="<?php echo"$number2" ?>">
                </div>
                <div>
                    <lable>Sum : </lable>
                    <input type="text" value="<?php echo"$sum" ?>">
                </div>
            </form>
        </section>
	</body>
</html>

