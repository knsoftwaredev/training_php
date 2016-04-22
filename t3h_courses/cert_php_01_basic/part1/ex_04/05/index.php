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
			$ca = isset($_POST['ca'])?$_POST['ca']:null;
			$cb = isset($_POST['cb'])?$_POST['cb']:null;
			
			if(isset($ca) && isset($cb)){
				$ch = sqrt(pow($ca,2) + pow($cb, 2));
			}
		}
	 ?>
	<article class="container">
		<form action="" method="POST">
			<header>
				cạnh huyền tam giác vuông
			</header>
			<section>
				<div><span class="txtName">Cạnh A:</span><input type="text" name="ca" id="" value="<?php echo isset($ca)?$ca:''; ?>"></div>
				<div><span class="txtName">Cạnh B:</span><input type="text" name="cb" id="" value="<?php echo isset($cb)?$cb:''; ?>"></div>
				<div><span class="txtName">Cạnh huyền:</span><input type="text" name="ch" id="ich" readonly value="<?php echo isset($ch)?$ch:''; ?>"></div>
			</section>
			<footer>
				<input type="submit" value="Tính" name="sbm">
			</footer>
		</form>
	</article>
</body>
</html>