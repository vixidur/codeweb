<?php
$month = "";
$year = "";
$daysInMonth = "";
$errorMess = "";

if (isset($_POST['month']) && isset($_POST['year'])) {
    $month = $_POST['month'];
    $year = $_POST['year'];

    if (is_numeric($month) && is_numeric($year) && $month >= 1 && $month <= 12 && $year > 0) {
        switch ($month) {
            case 1:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                $daysInMonth = 31;
                break;

            case 4:
            case 6:
            case 9:
            case 11:
                $daysInMonth = 30;
                break;

            case 2: // February
                if ($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0)) {
                    $daysInMonth = 29;
                } else {
                    $daysInMonth = 28;
                }
                break;
        }
    } else {
        $errorMess = "Nhập tháng và năm không hợp lệ. Vui lòng nhập tháng (1-12) và năm dương lịch hợp lệ.";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Số Ngày Trong Tháng</title>
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
        }

        .form-container {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus {
            border-color: #007bff;
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .error {
            color: red;
            font-size: 20px;
            margin-top: 10px;
        }

        .ketqua {
            color: green;
            font-size: 20px;
            margin-top: 10px;
        }

        @media (max-width: 400px) {
            .form-container {
                width: 90%;
                padding: 20px;
            }
        }

        .daysInMonth {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <form action="" method="POST">
            <h1>SỐ NGÀY TRONG THÁNG</h1>

            <label for="month">Nhập tháng (1-12):</label>
            <input type="text" name="month" value="<?php echo $month ?>" required><br>

            <label for="year">Nhập năm:</label>
            <input type="text" name="year" value="<?php echo $year ?>" required><br>

            <input type="submit" value="Tính số ngày">

            <?php if ($errorMess): ?>
                <div class="error"><?php echo $errorMess; ?></div>
            <?php elseif ($daysInMonth): ?>
                <div class="ketqua">Số ngày trong tháng <?php echo $month; ?> năm <?php echo $year; ?> là:
                    <?php echo $daysInMonth; ?>
                    ngày.
                </div>
            <?php endif; ?>
        </form>
    </div>
</body>

</html>