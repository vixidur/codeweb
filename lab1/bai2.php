<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diện Tích và Chu Vi Hình Tròn</title>
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
        text-align: center;
        margin-top: 20px;
        background: yellow;
        width: 320px;
    }

    input[type="number"] {
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
        <h1>DIỆN TÍCH VÀ CHU VI HÌNH TRÒN</h1>
        <form action="" method="post">
            <p>Bán kính: <input type="number" name="bankinh"></p>
            <p>Diện tích: <input type="number" name="dien_tich" value="<?php
			if (isset($_POST['bankinh']) && $_POST['bankinh'] != 0) {
				echo 3.14 * pow($_POST['bankinh'], 2);
			} else {
				echo 'Khong duoc phep nhap 0';
			}
			?>" readonly>
            </p>
            <p>Chu vi: <input type="number" name="chu_vi" value="<?php
			if (isset($_POST['bankinh']) && $_POST['bankinh'] != 0) {
				echo 2 * 3.14 * $_POST['bankinh'];
			} else {
				echo 'Khong duoc phep nhap 0';
			}
			?>" readonly>
            </p>
            <input type="submit" value="Tính">
        </form>
    </div>
</body>

</html>