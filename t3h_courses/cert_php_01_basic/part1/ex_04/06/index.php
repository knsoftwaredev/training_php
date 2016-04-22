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
			$soA = isset($_POST['soA'])?$_POST['soA']:null;
			$soB = isset($_POST['soB'])?$_POST['soB']:null;
			
			if(isset($soA) && isset($soB)){
				$soMax = $soA > $soB ? $soA : $soB;
			}
		}
	 ?>
	<article class="container">
		<form action="" method="POST">
			<header>
				tìm số lớn hơn
			</header>
			<section>
				<div><span class="txtName">Số A</span><input type="text" name="soA" id="" value="<?php echo isset($soA)?$soA:''; ?>"></div>
				<div><span class="txtName">Số B</span><input type="text" name="soB" id="" value="<?php echo isset($soB)?$soB:''; ?>"></div>
				<div><span class="txtName">Số lớn hơn</span><input type="text" name="soMax" id="isoMax" readonly value="<?php echo isset($soMax)?$soMax:''; ?>"></div>
			</section>
			<footer>
				<input type="submit" value="Tính" name="sbm">
			</footer>
		</form>
	</article>
</body>
</html>