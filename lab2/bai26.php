<?php
$firstString = "";
$secondString = "";
$ketqua = "";

if(isset($_POST['sosanh'])){
    $firstString = $_POST['firstString'];
    $secondString = $_POST['secondString'];

    $ketqua = strcasecmp($firstString, $secondString);

    if($ketqua == 0){
        $ketqua = "Hai chuỗi giống nhau";
    } else if($ketqua > 0){
        $ketqua = "Chuỗi thứ nhất lớn hơn chuỗi thứ hai (không phân biệt hoa thường)";
    } else {
        $ketqua = "Chuỗi thứ nhất nhỏ hơn chuỗi thứ hai (không phân biệt hoa thường)";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>So Sánh Chuỗi</title>
    <style>
        .container{
            width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            background-color: white;
            text-align: center;
            font-family: Arial, sans-serif;
            font-size: 16px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        input[type="text"]{
            width: 500px;
            padding: 10px;
            border: 1px solid #0ba045;
            border-radius: 5px;
        }
        button[type="submit"]{
            width: 300px;
            padding: 10px;
            border: 1px solid #0ba045;
            border-radius: 5px;
            background-color: #0ba045;
            color: white;
            font-weight: 400;
            font-size: 20px;
        }
    </style>
</head>

<body>

    <center><h1>SO SÁNH CHUỖI</h1></center>
    <div class="container">
        <form action="" method="POST">
            <label for="firstString">Chuỗi thứ nhất: <input type="text" name="firstString" id="firstString" value="<?php echo htmlspecialchars($firstString); ?>"></label><br><br>
            <label for="secondString">Chuỗi thứ hai: <input type="text" name="secondString" id="secondString" value="<?php echo htmlspecialchars($secondString); ?>"></label><br><br>
            <button type="submit" name="sosanh" value="sosanh">So sánh</button><br><br>
            <label for="ketqua">Kết quả: <input type="text" name="ketqua" id="ketqua" readonly value="<?php echo htmlspecialchars($ketqua); ?>"></label>
        </form>
    </div>
</body>

</html>
