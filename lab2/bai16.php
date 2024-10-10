<?php

$sum = 0;
$sumChan = 0;
$sumLe = 0;
$tich = 1;
$errorMessage = "";
$start = "";
$end = "";
if (isset($_POST['start']) && isset($_POST['end'])) {
    $start = intval($_POST['start']);
    $end = intval($_POST['end']);
    if ($start >= 0 && $start <= $end) {
        for ($i = $start; $i <= $end; $i++) {
            $sum += $i;
        }

        for ($i = $start; $i <= $end; $i++) {
            $tich *= $i;
        }

        for ($i = $start; $i <= $end; $i++) {
            if ($i % 2 == 0)
                $sumChan += $i;
        }
        for ($i = $start; $i <= $end; $i++) {
            if ($i % 2 != 0)
                $sumLe += $i;
        }
    } else {
        $errorMessage = "Vui lòng nhậP số lớn hơn hoặc bằng 0";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Toán Trên Dãy Số</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 1.5rem;
        }

        input[type="text"] {
            padding: 10px;
            /* margin: 10px 5px; */
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        label {
            display: block;
            margin: 15px 0;
            font-weight: bold;
        }

        input[readonly] {
            background-color: #f4f4f4;
            border: none;
            font-size: 16px;
            color: #333;
            width: 77%;
        }

        button {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        button:hover {
            background-color: #218838;
        }

        @media (max-width: 480px) {
            .container {
                width: 90%;
            }

            input[type="text"] {
                width: calc(100% - 20px);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <h1>Tính Toán Trên Dãy Số</h1>
            <label for="start">
                Số bắt đầu:
                <input type="text" name="start" id="start" value="<?php echo $start ?>" placeholder="Nhập số bắt đầu"
                    required>
            </label>
            <label for="end">
                Số kết thúc:
                <input type="text" name="end" id="end" value="<?php echo $end ?>" placeholder="Nhập số kết thúc"
                    required>
            </label>
            <label for="sum">
                Tổng các số:
                <input type="text" id="sum" value="<?php echo $sum ?>" readonly>
            </label>
            <label for="tich">
                Tích các số:
                <input type="text" id="tich" value="<?php echo $tich ?>" readonly>
            </label>
            <label for="sumChan">
                Tổng các số chẵn:
                <input type="text" id="sumChan" value="<?php echo $sumChan ?>" readonly>
            </label>
            <label for="sumLe">
                Tổng các số lẻ:
                <input type="text" id="sumLe" value="<?php echo $sumLe ?>" readonly>
            </label>
            <div>
                <?php echo $errorMessage ?>
            </div>
            <button type="submit">Tính Toán</button>
        </form>
    </div>
</body>

</html>