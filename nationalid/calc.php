<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>National ID Datails</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<?php
        $national = $_REQUEST["num"];
        $len      = strlen($national);
        if ($national == null){
            echo "<script>alert('Invalid Naumber !!!')</script>";
            header("refresh:0.1;index.php");
        }else{
            if ($len < 14 or $len > 14 ){
                echo "<script>alert('National Id Must Be 14 Naumber !!!')</script>";
                header("refresh:0.1;index.php");
            }else{
                
            }
        }

        ?>
        <section>
            <form>
                <div>
                    <lable>National ID : </lable>
                    <input type="text" value="<?php echo $national ?>">
                </div>
                <div>
                    <lable> مواليد سنة : <?php echo $national ?></lable>
                </div>
                <div>
                    <lable> تاريخ الميلاد : <?php echo $national ?></lable>
                </div>
                <div>
                    <lable> المحافظة : <?php echo $national ?></lable>
                </div>
                <div>
                    <lable> النوع : <?php echo $national ?></lable>
                </div>
                <div>
                    <lable> السوابق : <?php echo $national ?></lable>
                </div>
                <a href="index.php">Home Page</a>
            </form>
        </section>
	</body>
</html>

