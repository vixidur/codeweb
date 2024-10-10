<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận dạng tam giác</title>
    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f0f2f5;
    }

    .container {
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 350px;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #555;
    }

    input[type="number"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    .result {
        margin-top: 20px;
        font-weight: bold;
        text-align: center;
        color: #333;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>Nhận dạng loại tam giác</h1>
        <form action="" method="POST">
            <label for="side1">Cạnh 1:</label>
            <input type="number" name="side1" id="side1" required><br>

            <label for="side2">Cạnh 2:</label>
            <input type="number" name="side2" id="side2" required><br>

            <label for="side3">Cạnh 3:</label>
            <input type="number" name="side3" id="side3" required><br>

            <input type="submit" value="Nhận dạng tam giác">
        </form>

        <div class="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $side1 = $_POST['side1'];
                $side2 = $_POST['side2'];
                $side3 = $_POST['side3'];

                if ($side1 <= 0 || $side2 <= 0 || $side3 <= 0) {
                    echo "Độ dài các cạnh phải lớn hơn 0.";
                } elseif ($side1 + $side2 > $side3 && $side2 + $side3 > $side1 && $side1 + $side3 > $side2) {
                    if ($side1 == $side2 && $side2 == $side3) {
                        echo "Đây là tam giác đều.";
                    } elseif ($side1 == $side2 || $side2 == $side3 || $side1 == $side3) {
                        echo "Đây là tam giác cân.";
                    } else {
                        echo "Đây là tam giác thường.";
                    }
                } else {
                    echo "Đây không phải là một tam giác hợp lệ.";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>