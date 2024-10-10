<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IN BẢNG CỬU CHƯƠNG</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #e7f3ff;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    h1 {
        font-size: 24px;
        color: #0056b3;
        text-align: center;
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
        color: #333;
    }

    input[type="text"] {
        width: 92%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 15px;
    }

    button {
        width: 100%;
        padding: 10px;
        background-color: #0066cc;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }

    button:hover {
        background-color: #004d99;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>IN BẢNG CỬU CHƯƠNG</h1>
        <form action="cuu_chuong_mo_rong.php" method="POST">
            <label for="start">Bắt đầu từ:</label>
            <input type="text" name="start" id="start" placeholder="Nhập số bắt đầu" required>
            <label for="end">Kết thúc tại:</label>
            <input type="text" name="end" id="end" placeholder="Nhập số kết thúc" required>
            <button type="submit">In bảng cửu chương</button>
        </form>
    </div>
</body>

</html>