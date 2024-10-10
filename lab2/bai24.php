<?php
$chuoigoc = "";
$tugoc = "";
$tuthaythe = "";
$ketqua = "";

if (isset($_POST['chuoi_goc']) && isset($_POST['tu_goc']) && isset($_POST['tu_thay_the'])) {
    $chuoigoc = $_POST['chuoi_goc'];
    $tugoc = $_POST['tu_goc'];
    $tuthaythe = $_POST['tu_thay_the'];
    $ketqua = str_replace($tugoc, $tuthaythe, $chuoigoc);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THAY THẾ TỪ TRONG CHUỖI</title>
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #e0f7fa;
        margin: 0;
        padding: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    form {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        max-width: 450px;
        width: 100%;
    }

    h1 {
        text-align: center;
        color: #00796b;
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: 600;
        margin-bottom: 8px;
        color: #004d40;
    }

    input[type="text"] {
        width: 94%;
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #b0bec5;
        border-radius: 8px;
        font-size: 1rem;
        color: #333;
    }

    input[type="text"]:focus {
        border-color: #00796b;
        outline: none;
        box-shadow: 0 0 5px rgba(0, 121, 107, 0.3);
    }

    button {
        width: 100%;
        padding: 12px;
        background-color: #00796b;
        color: #fff;
        border: none;
        border-radius: 8px;
        font-size: 1.1rem;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #004d40;
    }

    .result {
        margin-top: 20px;
    }

    .result label {
        color: #004d40;
    }

    .result input {
        font-weight: bold;
        background-color: #f1f8e9;
    }
    </style>
</head>

<body>
    <form action="" method="POST">
        <h1>THAY THẾ TỪ TRONG CHUỖI</h1>
        <label for="chuoi_goc">Chuỗi:</label>
        <input type="text" name="chuoi_goc" id="chuoi_goc" value="<?php echo htmlspecialchars($chuoigoc); ?>" required>

        <label for="tu_goc">Từ gốc:</label>
        <input type="text" name="tu_goc" id="tu_goc" value="<?php echo htmlspecialchars($tugoc); ?>" required>

        <label for="tu_thay_the">Từ thay thế:</label>
        <input type="text" name="tu_thay_the" id="tu_thay_the" value="<?php echo htmlspecialchars($tuthaythe); ?>"
            required>

        <button type="submit">Thay thế</button>

        <div class="result">
            <label for="ketqua">Kết quả:</label>
            <input type="text" name="ketqua" id="ketqua" value="<?php echo htmlspecialchars($ketqua); ?>" readonly>
        </div>
    </form>
</body>

</html>