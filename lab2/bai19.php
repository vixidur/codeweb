<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Số Nguyên Tố</title>
    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        padding: 20px;
    }

    .container {
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        width: 100%;
        text-align: center;
    }

    h2 {
        color: #ff8c00;
        margin-bottom: 20px;
        font-size: 24px;
        text-transform: uppercase;
        font-weight: bold;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    label {
        font-size: 18px;
        margin-bottom: 10px;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 2px solid #ddd;
        border-radius: 5px;
        font-size: 16px;
        transition: border 0.3s ease;
    }

    input[type="text"]:focus {
        border-color: #ff8c00;
        outline: none;
    }

    input[type="submit"] {
        background-color: #ff8c00;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #e67e22;
    }

    p {
        margin-top: 20px;
        font-size: 16px;
        color: #333;
    }

    .result {
        background-color: #ffefd5;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ff8c00;
        display: inline-block;
        font-weight: bold;
        margin-top: 15px;
        color: #d35400;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2>Tìm Số Nguyên Tố</h2>
        <form method="POST">
            <label for="number">Nhập N:</label>
            <input type="text" id="number" name="n" value="<?php if(isset($_POST['n'])) echo $_POST['n']; ?>">
            <input type="submit" name="submit" value="Các số nguyên tố <= N">
        </form>

        <?php
        // Kiểm tra xem có nhấn nút submit hay chưa
        if (isset($_POST['submit'])) {
            // Lấy giá trị N từ form
            $n = $_POST['n'];

            // Hàm kiểm tra số nguyên tố
            function kt_snt($so) {
                if ($so < 2) {
                    return 0;
                }
                for ($i = 2; $i <= sqrt($so); $i++) {
                    if ($so % $i == 0) {
                        return 0;
                    }
                }
                return 1;
            }

            // Kiểm tra và xuất các số nguyên tố <= N
            if ($n < 2) {
                echo "<p>Không có số nguyên tố nào nhỏ hơn hoặc bằng $n.</p>";
            } else {
                $chuoi_snt = "2"; // Khởi tạo chuỗi với số 2
                for ($i = 3; $i <= $n; $i++) {
                    if (kt_snt($i)) {
                        $chuoi_snt .= " " . $i; // Nối thêm số nguyên tố vào chuỗi
                    }
                }
                echo "<p class='result'>Các số nguyên tố <= $n là: $chuoi_snt</p>";
            }
        }
        ?>
    </div>
</body>

</html>