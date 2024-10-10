<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải Phương Trình Bậc Nhất</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }
        input[type="text"] {
            width: 30px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Giải Phương Trình Bậc Nhất</h2>
        <form action="" method="POST">
            <center><label for="a">Phương trình:</label>
            <input type="text" name="a" id="a" require value="<?php echo isset($_POST['a']) ? $_POST['a'] : '' ?>">
            <label for="b">x +</label>
            <input type="text" name="b" id="b" require value="<?php echo isset($_POST['b']) ? $_POST['b'] : '' ?>">
            <label for=""> = 0</label><br><br>
            <label for="result">Nghiệm:</label>
            <input style="width: 150px" type="text" name="ketqua" id="ketqua" readonly value="<?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $a = $_POST['a'];
                    $b = $_POST['b'];

                    if ($a != 0) {
                        $x = -$b / $a;
                            echo $x;
                    } else {
                        if ($b == 0) {
                            echo "Phương trình vô số nghiệm.";
                        } else {
                            echo "Phương trình vô nghiệm.";
                            }
                        }
                    }
                ?>"><br>
            <input type="submit" value="Giải phương trình"></center>
        </form>
    </div>
</body>

</html>