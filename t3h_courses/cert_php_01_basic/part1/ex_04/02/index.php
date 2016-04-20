<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ex_04_02</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php 
	function html_res_gen($nd, $mc, $mn){
		?>
		<div class="result">
			<div>Kết quả sau khi nhấn <span>Xem kết quả</span></div>
			<div style="background-color: <?php echo '#'.$mn; ?>; color: <?php echo '#'.$mc; ?>"><?php echo $nd; ?></div>
		</div>
		<?php
	}

	if(isset($_POST['sbm'])){
		$nd = isset($_POST['nd'])?$_POST['nd']:null;
		$mc = isset($_POST['mc'])?$_POST['mc']:null;
		$mn = isset($_POST['mn'])?$_POST['mn']:null;
	}
	?>
	<article class="container">
		<form action="" method="POST">
			<header>
				định màu chữ - màu nền
			</header>
			<section>
				<div><span class="txtName">Nội dung</span><input type="text" name="nd" id="" value="<?php echo isset($nd)?$nd:''; ?>"></div>
				<div><span class="txtName">Màu nền</span><input type="text" name="mn" id="" value="<?php echo isset($mn)?$mn:''; ?>"></div>
				<div><span class="txtName">Màu chữ</span><input type="text" name="mc" id="" value="<?php echo isset($mc)?$mc:''; ?>"></div>
			</section>
			<footer>
				<input type="submit" id="isbm" value="Xem kết quả" name="sbm">
			</footer>
		</form>
		<?php 
			if(isset($_POST['sbm'])){
				html_res_gen($nd, $mc, $mn);
			}
		?>
	</article>
</body>
</html>