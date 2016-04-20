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
			$ten = isset($_POST['ten'])?$_POST['ten']:null;
			$csc = isset($_POST['csc'])?$_POST['csc']:null;
			$csm = isset($_POST['csm'])?$_POST['csm']:null;
			$dg = isset($_POST['dg'])?$_POST['dg']:null;
			
			if(isset($ten) && isset($csc) && isset($csm) && isset($dg)){
				$tt = ($csm - $csc) * $dg;
			}
		}
	 ?>
	<article class="container">
		<form action="" method="POST">
			<header>
				thanh toán tiền điện
			</header>
			<section>
				<div><span class="txtName">Tên chủ hộ</span><input type="text" name="ten" id="" value="<?php echo isset($ten)?$ten:''; ?>"></div>
				<div><span class="txtName">Chỉ số cũ</span><input type="text" name="csc" id="" value="<?php echo isset($csc)?$csc:''; ?>"> (Kw)</div>
				<div><span class="txtName">Chỉ số mới</span><input type="text" name="csm" id="" value="<?php echo isset($csm)?$csm:''; ?>"> (Kw)</div>
				<div><span class="txtName">Đơn giá</span><input type="text" name="dg" id="" value="<?php echo isset($dg)?$dg:2000; ?>"> (VNĐ)</div>
				<div><span class="txtName">Số tiền thanh toán</span><input type="text" name="tt" id="itt" readonly value="<?php echo isset($tt)?$tt:''; ?>"> (VNĐ)</div>
			</section>
			<footer>
				<input type="submit" value="Tính" name="sbm">
			</footer>
		</form>
	</article>
</body>
</html>