<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tran Van Chien</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #eef2f3;
            height: 100vh;
            margin: 0;
        }

        .result {
            background-color: white;
            box-sizing: border-box;
            width: 500px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #fff;
            text-shadow: 0 0 5px #003049, 0 0 10px #003049, 0 0 15px #003049, 0 0 20px #003049;
            margin-bottom: 20px;
        }

        label {
            font-size: 1.2em;
            margin-bottom: 10px;
            display: block;
            color: #555;
        }

        input[type="number"] {
            padding: 10px;
            border: 2px solid #003049;
            border-radius: 5px;
            font-size: 1em;
            width: 80%;
            margin-bottom: 15px;
            transition: border-color 0.3s;
        }

        input[type="number"]:focus {
            border-color: #044567;
            outline: none;
        }

        input[type="submit"] {
            padding: 12px 24px;
            border: none;
            background-color: #003049;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #044567;
        }

        .message {
            margin-top: 20px;
            font-size: 1.2em;
            color: #333;
            min-height: 30px;
        }
    </style>
</head>

<body>
    <div class="result">
        <h1>Chào theo giờ</h1>
        <form action="" method="POST">
            <label for="nhapgio">Nhập giờ:</label>
            <input type="number" name="nhapgio" min="0" max="23" placeholder="Nhap gio vao" required>
            <input type="submit" value="Chào">
        </form>
        <div class="message">
            <?php
            if (isset($_POST["nhapgio"])) {
                $gio = intval($_POST["nhapgio"]);
                if ($gio >= 0 && $gio <= 23) {
                    if ($gio < 12) {
                        echo "Chào buổi sáng";
                    } elseif ($gio < 18) {
                        echo "Chào buổi chiều";
                    } else {
                        echo "Chào buổi tối";
                    }
                } else {
                    echo "Vui lòng nhập giá trị hợp lệ (0 - 23)";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>