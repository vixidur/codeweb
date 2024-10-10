<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TÌM SỐ LỚN HƠN</title>
	<style type="text/css">
		body {
			font-family: Arial, sans-serif;
		}
		h1 {
			text-align: center;
			font-size: 24px;
			background: orange;
			width: 350px;
			margin: 20px auto;
			padding: 15px;
			border-radius: 10px;
			box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
		}
		.box {
			text-align: center;
			margin: 0 auto;
			background: yellow;
			width: 350px;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
		}
		input[type="number"] {
			margin: 10px 0;
			padding: 10px;
			width: 80%;
			border: 1px solid #ccc;
			border-radius: 5px;
		}
		input[type="submit"] {
			padding: 10px 20px;
			background: orange;
			border: none;
			color: white;
			cursor: pointer;
			border-radius: 5px;
			margin-top: 10px;
		}
		input[type="submit"]:hover {
			background: darkorange;
		}
	</style>
</head>
<body>
	<form action="" method="POST">
		<h1>TÌM SỐ LỚN HƠN</h1>
		<div class="box">
			<p>Số A: <input type="number" name="a" required></p>
			<p>Số B: <input type="number" name="b" required></p>
			<p>Số lớn hơn: <input type="number" name="chu_vi" value="<?php 
				if(isset($_POST['a']) && isset($_POST['b'])){
					echo max($_POST['a'], $_POST['b']);
				}
			?>" readonly></p>
			<input type="submit" value="Kết quả">
		</div>
	</form>
</body>
</html>
