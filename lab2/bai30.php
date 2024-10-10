<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Tổng Dãy Số</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            width: 600px;
            /* text-align: center; */
        }

        input[type="text"] {
            border: 1px solid #056325;
            margin: 0 auto;
            width: 200px;
            margin-top: 10px;
            padding: 10px;
            border-radius: 5px;
        }

        input[type="submit"] {
            /* display: flex;
            justify-content: center;
            align-items: center; */
            border: 1px solid #056325;
            background-color: #056325;
            padding-bottom: 5px;
            margin: 0 auto;
            width: 200px;
            margin-top: 10px;
            padding: 10px;
            border-radius: 5px;
            color: white;
            font-size: 16px;
        }

        .result {
            margin-top: 10px;
            font-size: 16px;
            color: #333;
            padding: 10px;
            background-color: #e8f5e9;
            border-left: 5px solid #27ae60;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h2>Tính Tổng Dãy Số</h2>
        <form method="post">
            <label for="dayso">Nhập dãy số (cách nhau bằng dấu phẩy):</label><br>
            <input type="text" name="dayso" id="dayso" placeholder="Ví dụ: 1,2,3,4,5" required>
            <input type="submit" name="tinh_tong" value="Tính tổng">
        </form>

        <?php
        if (isset($_POST['tinh_tong'])) {
            // Lấy giá trị dãy số từ form
            $dayso = $_POST['dayso'];

            // Tách dãy số thành mảng
            $mang = explode(",", $dayso);

            // Tính tổng các phần tử trong mảng
            $tong = 0;
            for ($i = 0; $i < count($mang); $i++) {
                $tong += (float)trim($mang[$i]);  // Chuyển mỗi phần tử thành số và tính tổng
            }

            // Hiển thị kết quả
            echo "<div class='result'>Tổng của dãy số là: $tong</div>";
        }
        ?>
    </div>

</body>

</html>