<?php
// Hàm để đọc một chữ số
function docChuSo($so)
{
    switch ($so) {
        case 0:
            return "không";
        case 1:
            return "một";
        case 2:
            return "hai";
        case 3:
            return "ba";
        case 4:
            return "bốn";
        case 5:
            return "năm";
        case 6:
            return "sáu";
        case 7:
            return "bảy";
        case 8:
            return "tám";
        case 9:
            return "chín";
    }
}

// Hàm để đọc số có 3 chữ số
function docSoBaChuSo($so)
{
    if ($so < 0 || $so > 999) {
        return "Số không hợp lệ. Vui lòng nhập số từ 0 đến 999.";
    }

    if ($so == 0) {
        return "không";
    }

    $tram = floor($so / 100);
    $chuc = floor(($so % 100) / 10);
    $donvi = $so % 10;

    $result = "";
    if ($tram > 0) {
        $result .= docChuSo($tram) . " trăm ";
    }
    if ($chuc > 1) {
        $result .= docChuSo($chuc) . " mươi ";
        if ($donvi == 0) {
            $result = rtrim($result);
        }
    } else if ($chuc == 1) {
        $result .= "mười ";
    } else if ($tram > 0 && $donvi != 0) {
        $result .= "lẻ ";
    }
    if ($donvi != 0) {
        if ($chuc != 1 && $donvi == 5) {
            $result .= "lăm";
        } else {
            $result .= docChuSo($donvi);
        }
    }

    return ucfirst(trim($result));
}

$ketqua = "";

if (isset($_POST['docso'])) {
    $so = intval($_POST['docso']);
    $ketqua = docSoBaChuSo($so);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐỌC SỐ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h1 {
            text-align: center;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        button {
            padding: 12px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 1.1rem;
        }

        button:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 15px;
            font-weight: bold;
            color: #333;
        }

        .result input[type="text"] {
            background-color: #f0f8e9;
        }
    </style>
</head>

<body>
    <form action="" method="POST">
        <h1>ĐỌC SỐ</h1>
        <label for="docso">Nhập số (0 -> 999):</label>
        <input type="text" name="docso" id="docso"
            value="<?php echo isset($_POST['docso']) ? htmlspecialchars($_POST['docso']) : ''; ?>" required>

        <button type="submit">Đọc số</button>

        <div class="result">
            <label for="bangchu">Bằng chữ:</label>
            <input type="text" name="bangchu" id="bangchu" value="<?php echo htmlspecialchars($ketqua); ?>" readonly>
        </div>
    </form>
</body>

</html>