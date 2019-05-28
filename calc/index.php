<! DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Sum</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<header>
			<h1>جمع رقمين</h1>
		</header>
		<section>
			<form action="calc.php" method="get">
				<div> 
					<lable>Number1 : </lable>
					<input type="text" name="num1" placeholder="Enter Number 1 !">
				</div>
				<div>
					<lable>Number2 : </lable>
					<input type="text" name="num2" placeholder="Enter Number 2 !">
				</div>
				<input type="submit" name="op" value="+">
                <input type="submit" name="op" value="-">
                <input type="submit" name="op" value="*">
                <input type="submit" name="op" value="/">
			</form>
		</section>
	</body>
</html>