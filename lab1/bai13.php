<?php
$ngay = $thang = $nam = $searchThu = "";
$dayOfWeek = "";

if (isset($_POST['searchThu'])) {
    $dateParts = explode('/', $_POST['searchThu']);

    if (count($dateParts) === 3) {
        $ngay = (int) $dateParts[0];
        $thang = (int) $dateParts[1];
        $nam = (int) $dateParts[2];

        if (checkdate($thang, $ngay, $nam)) {
            $jd = cal_to_jd(CAL_GREGORIAN, $thang, $ngay, $nam);
            $dayIndex = jddayofweek($jd, 0);

            switch ($dayIndex) {
                case 0:
                    $dayOfWeek = "Chủ nhật";
                    break;
                case 1:
                    $dayOfWeek = "Thứ hai";
                    break;
                case 2:
                    $dayOfWeek = "Thứ ba";
                    break;
                case 3:
                    $dayOfWeek = "Thứ tư";
                    break;
                case 4:
                    $dayOfWeek = "Thứ năm";
                    break;
                case 5:
                    $dayOfWeek = "Thứ sáu";
                    break;
                case 6:
                    $dayOfWeek = "Thứ bảy";
                    break;
            }
        } else {
            $dayOfWeek = "Ngày không hợp lệ.";
        }
    } else {
        $dayOfWeek = "Vui lòng nhập đúng định dạng Ngày/Tháng/Năm (dd/mm/yyyy).";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm thứ trong tuần</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 500px;
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
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
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
            font-weight: bold;
            color: #333;
        }

        @media (max-width: 400px) {
            .form-container {
                width: 90%;
                padding: 20px;
            }
        }

        .design {
            margin-top: 3%;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1>Tìm thứ trong tuần</h1>
        <form action="" method="POST">
            <label for="">Ngày/Tháng/Năm:</label>
            <input type="text" name="searchThu" placeholder="dd/mm/yyyy" value="<?php echo "$ngay/$thang/$nam" ?>"
                required>
            <input type="submit" value="Tìm thứ trong tuần">
            <input type="text" value="<?php echo "Ngày: $ngay, Tháng: $thang, Năm: $nam là $dayOfWeek"; ?>"
                class="design" readonly>
        </form>
    </div>
</body>

</html>