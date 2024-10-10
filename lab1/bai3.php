<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>THANH TOÁN TIỀN ĐIỆN</title>
	<style type="text/css">
		h1 {
			text-align: center;
			font-size: 20px;
			background: orange;
			width: 300px;
			margin: 20px auto;
			padding: 10px;
		}
		.box {
			margin: 0 auto;
			text-align: center;
			margin-top: 20px;
			background: yellow;
			width: 500px;
			padding: 20px;
			border-radius: 10px;
		}
		input[type="number"], input[type="text"] {
			margin: 10px 0;
			padding: 5px;
			width: 200px;
		}
		input[type="submit"] {
			padding: 10px 20px;
			background: orange;
			border: none;
			color: white;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background: darkorange;
		}
	</style>
</head>
<body>
	<div class="box">
		<h1>THANH TOÁN TIỀN ĐIỆN</h1>
		<form action="" method="post">
			<p>Tên chủ hộ: <input type="text" name="name_chuho" required></p>
			<p>Chỉ số cũ: <input type="number" name="chisocu" required></p>
			<p>Chỉ số mới: <input type="number" name="chisomoi" required></p>
			<p>Đơn giá: <input type="number" name="dongia" required></p>
			<p>Số tiền thanh toán: <input type="number" name="tongtien" value="<?php 
				if (isset($_POST['chisocu']) && isset($_POST['chisomoi']) && isset($_POST['dongia'])) {
					$chisocu = $_POST['chisocu'];
					$chisomoi = $_POST['chisomoi'];
					$dongia = $_POST['dongia'];
					$thanhtoan = ($chisomoi - $chisocu) * $dongia; // Sửa phép toán
					echo $thanhtoan;       
				}
			?>" readonly></p>
			<input type="submit" value="Tính">
		</form>
	</div>
</body>
</html>
