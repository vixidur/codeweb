<?php
$toan = "";
$ly = "";
$hoa = "";
$diemchuan = "";
$kqthi = "";
$tongdiem = "";

if (isset($_POST['toan']) && isset($_POST['ly']) && isset($_POST['hoa']) && isset($_POST['diemchuan'])) {
    $toan = floatval($_POST['toan']);
    $ly = floatval($_POST['ly']);
    $hoa = floatval($_POST['hoa']);
    $diemchuan = floatval($_POST['diemchuan']);
    if ($toan >= 0 && $toan <= 10 && $ly >= 0 && $ly <= 10 && $hoa >= 0 && $hoa <= 10) {
        $tongdiem = $toan + $ly + $hoa;
        if ($tongdiem >= $diemchuan && $toan != 0 && $ly != 0 && $hoa != 0) {
            $kqthi = "Đậu";
        } else {
            $kqthi = "Thi rớt";
        }
    } else {
        $kqthi = "Nhập điểm không hợp lệ!";
        $tongdiem = "";
    }
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính điểm thi đại học</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #8EC5FC, #E0C3FC);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            border: none;
            background-color: #4CAF50;
            color: white;
            font-size: 18px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .container label,
        .container input[type="text"] {
            margin-bottom: 15px;
        }

        input[readonly] {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>KẾT QUẢ THI ĐẠI HỌC</h1>
        <form action="" method="POST">
            <label for="toan">Toán:</label>
            <input type="text" name="toan" value="<?php echo $toan; ?>" min="0" max="10" required>

            <label for="ly">Lý:</label>
            <input type="text" name="ly" value="<?php echo $ly; ?>" min="0" max="10" required>

            <label for="hoa">Hoá:</label>
            <input type="text" name="hoa" value="<?php echo $hoa; ?>" min="0" max="10" required>

            <label for="diemchuan">Điểm chuẩn:</label>
            <input type="text" name="diemchuan" value="<?php echo $diemchuan; ?>" required>

            <label for="tongdiem">Tổng điểm:</label>
            <input type="text" name="tongdiem" value="<?php echo round($tongdiem, 2); ?>" readonly>

            <label for="kqthi">Kết quả thi:</label>
            <input type="text" name="kqthi" value="<?php echo $kqthi; ?>" readonly>

            <input type="submit" value="Xem kết quả">
        </form>
    </div>
</body>

</html>