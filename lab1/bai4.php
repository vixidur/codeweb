<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CẠNH HUYỀN TAM GIÁC VUÔNG</title>
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
		<h1>CẠNH HUYỀN TAM GIÁC VUÔNG</h1>
		<div class="box">
			<p>Cạnh A: <input type="number" name="a" required></p>
			<p>Cạnh B: <input type="number" name="b" required></p>
			<p>Cạnh huyền: <input type="number" name="chu_vi" value="<?php
			if (isset($_POST['a']) && isset($_POST['b'])) {
				$a = $_POST['a'];
				$b = $_POST['b'];
				$res = sqrt(pow($a, 2) + pow($b, 2));
				if ($a != 0 && $b != 0) {
					echo round($res, 2);
				} else {
					echo '<h1>Vui long nhap mot so khac 0</h1>';
				}
			}
			?>" readonly></p>
			<input type="submit" value="Tính">
		</div>
	</form>
</body>

</html>