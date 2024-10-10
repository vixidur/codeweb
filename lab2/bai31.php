<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Năm Nhuận</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 500px;
            text-align: center;
        }

        h2 {
            color: #4a90e2;
            margin-bottom: 20px;
            font-size: 22px;
        }

        label {
            font-size: 16px;
            color: #333;
        }

        input[type="text"] {
            width: 92%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        input[type="text"]:hover {
            width: 92%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #0BA045;
            border-radius: 5px;
            font-size: 14px;
        }
        input[type="submit"] {
            width: 90%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4a90e2;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #357ab7;
        }

        .result {
            margin-top: 20px;
            font-size: 16px;
            font-weight: bold;
            color: #333;
            border-left: 5px solid #0BA045;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h2>Tìm Năm Nhuận</h2>
        <form method="post">
            <label for="nam">Nhập năm:</label><br>
            <input type="text" name="nam" id="nam" placeholder="Ví dụ: 2024" required>
            <input type="submit" name="tim_nam_nhuan" value="Tìm năm nhuận">
        </form>

        <?php
        // Hàm kiểm tra năm nhuận
        function nam_nhuan($nam)
        {
            if (($nam % 400 == 0) || ($nam % 4 == 0 && $nam % 100 != 0)) {
                return 1; // Năm nhuận
            }
            return 0; // Không phải năm nhuận
        }

        if (isset($_POST['tim_nam_nhuan'])) {
            // Lấy giá trị năm từ form
            $nam = (int)$_POST['nam'];
            $kq = "";

            // Duyệt từ năm 2000 đến năm nhập
            foreach (range(2000, $nam) as $year) {
                if (nam_nhuan($year)) {
                    $kq .= "$year, "; // Năm nhuận gán vào chuỗi
                }
            }

            // Loại bỏ dấu phẩy cuối cùng
            $kq = rtrim($kq, ", ");

            // Hiển thị kết quả
            if ($kq != "") {
                echo "<div class='result'>$kq là năm nhuận</div>";
            } else {
                echo "<div class='result'>Không có năm nhuận trong khoảng này.</div>";
            }
        }
        ?>
    </div>

</body>

</html>