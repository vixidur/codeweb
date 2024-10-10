<?php
$ketqua = [];
if (isset($_POST['nam'])) {
    $nam = intval($_POST['nam']);
    // foreach(mang as item)
    foreach (range(2000, $nam) as $year) {
        if (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0)) {
            $ketqua[] = $year;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #ccc;
    }

    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        max-width: 500px;
        width: 100%;
        margin: 0 auto;
    }

    .title {
        background-color: blue;
        width: 112%;
        text-align: center;
        color: white;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        box-shadow: 0 5px 5px 0 rgba(0, 0, 0, 0.5);
    }

    .item {
        color: black;
        padding: 30px;
        background-color: goldenrod;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        box-shadow: 0 5px 5px 0 rgba(0, 0, 0, 0.5);
    }

    input[type="text"] {
        width: 100%;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid pink;
    }

    button[type="submit"] {
        width: 100%;
        padding: 5px;
        border-radius: 5px;
        background-color: blue;
        border: none;
        font-size: 16px;
        color: aliceblue;
    }
</style>

<body>
    <div class="container">
        <div class="title">
            <h2>HIEN THI RA NAM NHUAN</h2>
        </div>
        <div class="item">
            <form action="" method="POST">
                <label for="">Nhap nam: </label><br><br>
                <input type="text" name="nam" id=""><br><br>
                <button type="submit">Tim nam nhuan</button><br><br>
                <label for="" style="color: white">
                    <?php
                    if (!empty($ketqua)) {
                        echo implode(", ", $ketqua) . " la nhung nam nhuan";
                    } else {
                        echo "Khong co nam nhuan";
                    }
                    ?>
                </label>
            </form>
        </div>
    </div>
</body>

</html>