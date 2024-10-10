<?php
$diemhk1 = "";
$diemhk2 = "";
$dtb = "";
$kq = "";
$xl = "";

if (isset($_POST['diemhk1']) && isset($_POST['diemhk2'])) {
    $diemhk1 = floatval($_POST['diemhk1']);
    $diemhk2 = floatval($_POST['diemhk2']);

    if ($diemhk1 >= 0 && $diemhk1 <= 10 && $diemhk2 >= 0 && $diemhk2 <= 10) {
        $dtb = round((($diemhk1 + $diemhk2 * 2) / 3), 2);
        if ($dtb >= 5) {
            $kq = 'Được lên lớp';
        } else {
            $kq = 'Ở lại lớp';
        }
        if ($dtb >= 8) {
            $xl = 'Giỏi';
        } elseif ($dtb >= 6.5) {
            $xl = 'Khá';
        } elseif ($dtb >= 5) {
            $xl = 'Trung bình';
        } else {
            $xl = 'Yếu';
        }
    } else {
        $kq = 'Điểm không hợp lệ!';
        $xl = '';
    }
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết Quả Học Tập</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #74ebd5, #ACB6E5);
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
        <h1>KẾT QUẢ HỌC TẬP</h1>
        <form action="" method="POST">
            <label for="diemhk1">Điểm HK1:</label>
            <input type="text" name="diemhk1" min="0" max="10" required>

            <label for="diemhk2">Điểm HK2:</label>
            <input type="text" name="diemhk2" min="0" max="10" required>

            <label for="dtb">Điểm trung bình:</label>
            <input type="text" value="<?php echo $dtb; ?>" readonly>

            <label for="kqht">Kết quả học tập:</label>
            <input type="text" value="<?php echo $kq; ?>" readonly>

            <label for="xlhl">Xếp loại học lực:</label>
            <input type="text" value="<?php echo $xl; ?>" readonly>

            <input type="submit" value="Xem kết quả">
        </form>
    </div>
</body>

</html>