<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải Phương Trình Bậc 2</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            color: #27ae60;
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            text-transform: uppercase;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .equation {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 5px;
        }

        .equation input[type="text"] {
            padding: 10px;
            font-size: 16px;
            width: 50px;
            border-radius: 5px;
            border: 2px solid #ddd;
            text-align: center;
        }

        .equation span {
            font-size: 18px;
        }

        input[type="submit"] {
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            background-color: #27ae60;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 5px;
        }

        input[type="submit"]:hover {
            background-color: #2ecc71;
        }

        .result {
            margin-top: 10px;
            font-size: 16px;
            color: #333;
            padding: 10px;
            background-color: #e8f5e9;
            border-left: 5px solid #27ae60;
        }

        .result strong {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Giải Phương Trình Bậc 2</h2>
        <form method="POST">
            <div class="equation">
                <input type="text" id="a" name="a" value="<?php if (isset($_POST['a']))
                    echo $_POST['a']; ?>" required>
                <span>x² +</span>
                <input type="text" id="b" name="b" value="<?php if (isset($_POST['b']))
                    echo $_POST['b']; ?>" required>
                <span>x +</span>
                <input type="text" id="c" name="c" value="<?php if (isset($_POST['c']))
                    echo $_POST['c']; ?>" required>
                <span>= 0</span>
            </div>
            <?php
            if (isset($_POST['submit'])) {
                // Lấy giá trị hệ số a, b, c từ form
                $a = $_POST['a'];
                $b = $_POST['b'];
                $c = $_POST['c'];

                // Hàm giải phương trình bậc nhất
                function giai_ptb1($a, $b)
                {
                    if ($a == 0 && $b == 0) {
                        return "Phương trình có vô số nghiệm.";
                    } elseif ($a == 0 && $b != 0) {
                        return "Phương trình vô nghiệm.";
                    } else {
                        return "Phương trình có nghiệm: x = " . (-$b / $a);
                    }
                }

                // Hàm giải phương trình bậc 2
                function giai_ptb2($a, $b, $c)
                {
                    if ($a == 0) {
                        return giai_ptb1($b, $c);
                    } else {
                        $delta = $b * $b - 4 * $a * $c;
                        if ($delta < 0) {
                            return "Phương trình vô nghiệm.";
                        } elseif ($delta == 0) {
                            $x = -$b / (2 * $a);
                            return "Phương trình có nghiệm kép: x1 = x2 = " . $x;
                        } else {
                            $x1 = (-$b + sqrt($delta)) / (2 * $a);
                            $x2 = (-$b - sqrt($delta)) / (2 * $a);
                            return "Phương trình có 2 nghiệm phân biệt: x1 = " . $x1 . ", x2 = " . $x2;
                        }
                    }
                }

                // Gọi hàm giải phương trình bậc 2 và in kết quả
                $ketqua = giai_ptb2($a, $b, $c);
                echo "<div class='result'><strong>Kết quả:</strong> $ketqua</div>";
            }
            ?>
            <center><input type="submit" name="submit" value="Giải phương trình"></center>
        </form>

    </div>
</body>

</html>