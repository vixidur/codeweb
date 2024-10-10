<?php
$ho = "";
$ten_dem = "";
$ten = "";
$hoten = "";
if (isset($_POST['tach'])) {
    $hoten = trim($_POST['rootString']);
    $mang = explode(" ", $hoten);
    $ten_dem = "";

    if (count($mang) > 1) {
        $ho = $mang[0];
        $ten = $mang[count($mang) - 1];
        for ($i = 1; $i < count($mang) - 1; $i++) {
            $ten_dem .= $mang[$i] . ' ';
        }
        $ten_dem = trim($ten_dem);
    } else {
        $ten = $hoten;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TÁCH HỌ VÀ TÊN</title>
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f0f4f8;
        margin: 0;
        padding: 0;
    }

    h1 {
        color: #333;
        margin-top: 30px;
        font-size: 2em;
    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin: 50px auto;
        padding: 40px;
        width: 100%;
        max-width: 500px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    label {
        width: 100%;
        margin: 10px 0;
        color: #555;
        font-size: 1rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    input[type="text"] {
        width: calc(100% - 110px);
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 1rem;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    button {
        padding: 10px 20px;
        font-size: 1.1rem;
        color: white;
        background-color: #3498db;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #2980b9;
    }

    @media (max-width: 600px) {
        .container {
            padding: 20px;
            width: 90%;
        }

        input[type="text"] {
            width: 100%;
        }
    }
    </style>
</head>

<body>

    <center>
        <h1>TÁCH HỌ VÀ TÊN</h1>
    </center>
    <div class="container">
        <form action="" method="post">
            <label for="rootString">Họ và tên:
                <input type="text" name="rootString" id="rootString" value="<?php echo $hoten; ?>">
            </label>
            <label for="hoString">Họ:
                <input type="text" name="hoString" id="hoString" value="<?php echo $ho; ?>">
            </label>
            <label for="centerString">Tên đệm:
                <input type="text" name="centerString" id="centerString" value="<?php echo $ten_dem; ?>">
            </label>
            <label for="nameString">Tên:
                <input type="text" name="nameString" id="nameString" value="<?php echo $ten; ?>">
            </label>
            <center><button type="submit" name="tach">Tách Họ Tên</button></center>
        </form>
    </div>

</body>

</html>