<?php
$nhap = "";
$ketqua = "";
if (isset($_POST['nhap'])) {
    $nhap = intval($_POST['nhap']);
    if ($nhap > 0) {
        for ($i = 1; $i <= 10; $i++) {
            $ketqua .= $nhap . " x " . $i . " = " . ($nhap * $i) . "<br>";
        }
    } else {
        $ketqua = "Vui lòng nhập một số dương.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BẢNG CỬU CHƯƠNG</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #e0f7fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 600px;
            text-align: center;
        }

        h1 {
            border-radius: 5px;
            padding: 1rem;
            margin-bottom: 20px;
            background-color: #00796b;
            color: white;
        }

        input[type="text"] {
            width: 80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            margin-top: 10px;
            background-color: #00796b;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            /* margin-left: 10px; */
        }

        button:hover {
            background-color: #004d40;
        }

        .result {
            margin-top: 20px;
            background-color: #ffffff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .result p {
            margin: 0;
            font-size: 16px;
            color: #333;
            text-align: left;
        }

        .ketqua {
            border-radius: 5px;
            padding: 1rem;
            margin-top: 10px;
            background-color: #00796b;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <h1>BẢNG CỬU CHƯƠNG</h1>
            <label for="">
                <input type="text" name="nhap" placeholder="Nhập một số" required>
                <button type="submit">Thực hiện</button>
            </label>
            <div class="ketqua">
                KẾT QUẢ:
            </div>
            <div class="result">
                <?php
                if (!empty($ketqua)) {
                    echo $ketqua;
                }
                ?>
            </div>
        </form>
    </div>
</body>

</html>