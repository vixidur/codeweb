<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm USCLN và BSCNN</title>
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
        <h2>Tìm USCLN và BSCNN</h2>
        <form method="POST">
            <label for="a">Số A:</label>
            <input type="text" id="a" name="a" value="<?php if(isset($_POST['a'])) echo $_POST['a']; ?>">

            <label for="b">Số B:</label>
            <input type="text" id="b" name="b" value="<?php if(isset($_POST['b'])) echo $_POST['b']; ?>">

            <label for="uscln">USCLN:</label>
            <input type="text" id="uscln" name="uscln" readonly value="<?php if(isset($_POST['uscln'])) echo $_POST['uscln']; ?>">

            <label for="bscnn">BSCNN:</label>
            <input type="text" id="bscnn" name="bscnn" readonly value="<?php if(isset($_POST['bscnn'])) echo $_POST['bscnn']; ?>">

            <input type="submit" name="submit" value="Tìm USCLN và BSCNN">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            // Lấy giá trị số A và B từ form
            $a = $_POST['a'];
            $b = $_POST['b'];

            // Hàm tính USCLN bằng vòng lặp do...while
            function uscln($a, $b) {
                while ($a != $b) {
                    if ($a > $b) {
                        $a = $a - $b;
                    } else {
                        $b = $b - $a;
                    }
                }
                return $a;
            }

            // Tính USCLN và BSCNN
            if ($a > 0 && $b > 0) {
                $uscln = uscln($a, $b);
                $bscnn = ($a * $b) / $uscln;

                echo "<script>
                        document.getElementById('uscln').value = '$uscln';
                        document.getElementById('bscnn').value = '$bscnn';
                      </script>";
            } else {
                echo "<p>Vui lòng nhập số A và số B hợp lệ.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
