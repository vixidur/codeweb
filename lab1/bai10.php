<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tiền karaoke</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e9ecef;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #dc3545;
            font-size: 36px;
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-size: 18px;
            color: #343a40;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus {
            border-color: #dc3545;
            outline: none;
        }

        input[type="submit"] {
            padding: 12px 20px;
            width: 100%;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #218838;
            transform: translateY(-2px);
        }

        .result {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            margin-top: 10px;
            display: none;
            /* Initially hidden */
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Tính Tiền Karaoke</h2>
        <form action="" method="POST">
            <label for="start">Giờ bắt đầu:</label>
            <input type="text" name="start" id="start" required
                value="<?php echo isset($_POST['start']) ? htmlspecialchars($_POST['start']) : '' ?>"
                placeholder="Nhập giờ bắt đầu">
            <label for="finish">Giờ kết thúc:</label>
            <input type="text" name="finish" id="finish" required
                value="<?php echo isset($_POST['finish']) ? htmlspecialchars($_POST['finish']) : '' ?>"
                placeholder="Nhập giờ kết thúc">

            <input type="submit" value="Tính tiền">
        </form>
        <div class="result">
            <?php
            if (isset($_POST['start']) && isset($_POST['finish'])) {
                $start = (int) $_POST['start'];
                $finish = (int) $_POST['finish'];
                $temp = $finish - $start;

                if ($start >= 0 && $start < 10) {
                    echo "Quán đóng cửa từ 0h đến 10h.";
                } elseif ($start >= 10 && $start < 17) {
                    echo $temp > 0 ? "Tiền thanh toán: " . ($temp * 20000) . " VNĐ" : "Giờ kết thúc phải > giờ bắt đầu.";
                } elseif ($start >= 17 && $start < 24) {
                    echo $temp > 0 ? "Tiền thanh toán: " . ($temp * 45000) . " VNĐ" : "Giờ kết thúc phải > giờ bắt đầu.";
                } else {
                    echo "Vui lòng nhập lại!";
                }
            }
            ?>
        </div>
    </div>
    <script>
        const resultDiv = document.querySelector('.result');
        <?php if (isset($_POST['start']) || isset($_POST['finish'])): ?>
            resultDiv.style.display = 'block';
        <?php endif; ?>
    </script>
</body>

</html>