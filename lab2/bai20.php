<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Số Chia Hết Cho A và B</title>
    <style>
    * {
        box-sizing: border-box;
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
        color: #d35400;
        margin-bottom: 20px;
        font-size: 24px;
        text-transform: uppercase;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    label {
        font-size: 18px;
        margin-bottom: 5px;
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
        border-color: #d35400;
        outline: none;
    }

    input[type="submit"] {
        background-color: #d35400;
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
        border: 1px solid #d35400;
        display: inline-block;
        font-weight: bold;
        margin-top: 15px;
        color: #d35400;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2>Tìm Số Chia Hết Cho A và B</h2>
        <form method="POST">
            <label for="number">Nhập (1=>N):</label>
            <input type="text" id="number" name="n" value="<?php if (isset($_POST['n']))
                echo $_POST['n']; ?>">

            <label for="a">Nhập A:</label>
            <input type="text" id="a" name="a" value="<?php if (isset($_POST['a']))
                echo $_POST['a']; ?>">

            <label for="b">Nhập B:</label>
            <input type="text" id="b" name="b" value="<?php if (isset($_POST['b']))
                echo $_POST['b']; ?>">

            <input type="submit" name="submit" value="Các số chia hết cho A và B">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            // Lấy giá trị N, A, B từ form
            $n = $_POST['n'];
            $a = $_POST['a'];
            $b = $_POST['b'];

            // Hàm kiểm tra số chia hết cho A và B
            function kt_so($so, $a, $b)
            {
                if ($so % $a == 0 && $so % $b == 0) {
                    return 1;
                }
                return 0;
            }

            // Tìm các số chia hết cho A và B <= N
            if ($n >= 1 && $a > 0 && $b > 0) {
                $chuoi = "";  // Khởi tạo chuỗi
                for ($i = 1; $i <= $n; $i++) {
                    if (kt_so($i, $a, $b)) {
                        $chuoi .= $i . " "; // Nối số chia hết vào chuỗi
                    }
                }
                if ($chuoi == "") {
                    echo "<p>Không có số nào chia hết cho cả $a và $b.</p>";
                } else {
                    echo "<p class='result'>$chuoi</p>";
                }
            } else {
                echo "<p>Vui lòng nhập số N, A và B hợp lệ.</p>";
            }
        }
        ?>
    </div>
</body>

</html>