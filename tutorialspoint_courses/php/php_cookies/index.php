<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tutorialspoint - PHP - Cookies</title>
</head>
<body>
<?php 
	if(isset($_POST['sbmSet'])){
		setcookie('name', 'Khanh Nguyen', time()+3600);
		header("Location:".$_SERVER['PHP_SELF']);
	}

	if(isset($_POST['sbmClear'])){
		setcookie('name', 'Khanh Nguyen', time()-3600);
		header("Location:".$_SERVER['PHP_SELF']);
	}
 ?>
	<fieldset>
		<legend><i>Cookies Variable</i></legend>

		<?php
			print_r($_COOKIE); 
			if(isset($_COOKIE['name'])){
				print $_COOKIE['name'];
			}
		 ?>
	</fieldset>
	<br>
	<form action="" method="POST">
		<input type="submit" name="sbmSet" value="Set Cookies">
		<input type="submit" name="sbmClear" value="Clear Cookies">
	</form>
</body>
</html>