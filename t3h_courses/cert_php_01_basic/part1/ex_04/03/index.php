<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ex_04_01</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php 
		define('PI', 3.14);
		if(isset($_POST['sbm'])){
			$bk = isset($_POST['bk'])?$_POST['bk']:null;

			if(!empty($bk)){
				$cv = $bk * 2 * PI;
				$dt = pow($bk, 2) * PI;
			}
			
			
			
		}
	 ?>
	<article class="container">
		<form action="" method="POST">
			<header>
				diện tích <span>và</span> chu vi hình tròn
			</header>
			<section>
				<div><span class="txtName">Bán kính</span><input type="text" name="bk" id="ibk" value="<?php echo isset($bk)?$bk:''; ?>"></div>
				<div><span class="txtName">Diện tích</span><input type="text" name="dt" id="" readonly value="<?php echo isset($dt)?$dt:''; ?>"></div>
				<div><span class="txtName">Chu vi</span><input type="text" name="cv" id="" readonly value="<?php echo isset($cv)?$cv:''; ?>"></div>
			</section>
			<footer>
				<input type="submit" value="Tính" name="sbm">
			</footer>
		</form>
	</article>
</body>
</html>