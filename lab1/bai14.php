<?php
$year = "";
$zodiac = "";
$can = "";
$errorMess = "";

if (isset($_POST['year'])) {
    $year = $_POST['year'];
    if (is_numeric($year) && $year > 0) {
        // Tính chỉ số con giáp
        $index = ($year - 4) % 12;
        $zodiacList = ["Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất", "Hợi"];
        $zodiac = $zodiacList[$index];

        // Tính chỉ số can
        $canIndex = ($year - 3) % 10;
        $canList = ["Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm"];
        $can = $canList[$canIndex];
    } else {
        $errorMess = "Nhập năm không hợp lệ. Vui lòng nhập một năm dương lịch hợp lệ.";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12 Con Giáp</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #f0f2f5, #d9e3e3);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .input-group {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #555;
            margin-right: 10px;
            flex-basis: 30%;
            text-align: right;
        }

        input[type="text"] {
            flex: 1;
            padding: 10px;
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
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }

        .result {
            color: green;
            font-size: 16px;
            margin-top: 10px;
        }

        @media (max-width: 400px) {
            .form-container {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="form-container">
        <form action="" method="POST">
            <h1>12 CON GIÁP</h1>

            <div class="input-group">
                <label for="year">Nhập năm:</label>
                <input type="text" name="year" value="<?php echo htmlspecialchars($year); ?>" required>
            </div>

            <div class="input-group">
                <label for="zodiac">Con giáp:</label>
                <input type="text" name="zodiac" value="<?php echo htmlspecialchars($can . " " . $zodiac); ?>" readonly>
            </div>

            <input type="submit" value="Xem con giáp">

            <div>
                <?php if (!empty($errorMess)): ?>
                    <h4 class="error"><?php echo htmlspecialchars($errorMess); ?></h4>
                <?php endif; ?>
            </div>
        </form>
    </div>
</body>

</html>