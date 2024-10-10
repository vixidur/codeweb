<?php
$chu = "";
$errorMess = "";

if (isset($_POST['so'])) {
    $so = $_POST['so'];
    if (is_numeric($so) && $so >= 0 && $so <= 9) {
        switch ($so) {
            case 0:
                $chu = "không";
                break;
            case 1:
                $chu = "một";
                break;
            case 2:
                $chu = "hai";
                break;
            case 3:
                $chu = "ba";
                break;
            case 4:
                $chu = "bốn";
                break;
            case 5:
                $chu = "năm";
                break;
            case 6:
                $chu = "sáu";
                break;
            case 7:
                $chu = "bảy";
                break;
            case 8:
                $chu = "tám";
                break;
            case 9:
                $chu = "chín";
                break;
        }
    } else {
        $errorMess = "Nhập số không hợp lệ. Vui lòng nhập lại một số từ 0 đến 9.";
    }
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đọc số</title>
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
        width: 300px;
        text-align: center;
    }

    h1 {
        color: #333;
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #555;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
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

    .error {
        color: red;
        font-size: 14px;
        margin-top: 10px;
    }

    @media (max-width: 400px) {
        .form-container {
            width: 100%;
            padding: 20px;
        }
    }
    </style>
</head>

<body>
    <div class="form-container">
        <form action="" method="POST">
            <h1>ĐỌC SỐ</h1>

            <label for="so">Nhập số (0 - 9):</label>
            <input type="text" name="so" value="<?php echo $so = $_POST['so']?>" required><br>

            <input type="submit" value="Đọc số"><br>

            <label for="chu">Bằng chữ:</label>
            <input type="text" name="chu" value="<?php echo $chu; ?>" readonly>
            <div>
                <?php echo "<h4 class='error'>$errorMess</h4>" ?>
            </div>
        </form>
    </div>
</body>

</html>