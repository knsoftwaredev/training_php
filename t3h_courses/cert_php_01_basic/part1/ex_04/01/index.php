<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ex_04_01</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php 
		if(isset($_POST['sbm'])){
			$cd = isset($_POST['cd'])?$_POST['cd']:null;
			$cr = isset($_POST['cr'])?$_POST['cr']:null;
			
			if(isset($cd) && isset($cr)){
				$dt = $cd * $cr;
			}
		}
	 ?>
	<article class="container">
		<form action="" method="POST">
			<header>
				diện tích hình chữ nhật
			</header>
			<section>
				<div><span class="txtName">Chiều dài</span><input type="text" name="cd" id="" value="<?php echo isset($cd)?$cd:''; ?>"></div>
				<div><span class="txtName">Chiều rộng</span><input type="text" name="cr" id="" value="<?php echo isset($cr)?$cr:''; ?>"></div>
				<div><span class="txtName">Diện tích</span><input type="text" name="dt" id="idt" readonly value="<?php echo isset($dt)?$dt:''; ?>"></div>
			</section>
			<footer>
				<input type="submit" value="Tính" name="sbm">
			</footer>
		</form>
	</article>
</body>
</html>