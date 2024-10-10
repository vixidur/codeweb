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
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .container {
        margin: 0 auto;
        box-sizing: border-box;
        width: 100%;
        max-width: 500px;
        background-color: white;
        padding: 50px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    .container form {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    label {
        float: left;
    }

    input[type="text"] {
        border: 1px solid blue;
        padding: 8px;
        border-radius: 5px;
    }

    input[type="text"]:hover {
        border: 1px solid burlywood;
    }

    button[type="submit"] {
        border: none;
        padding: 10px;
        color: white;
        border-radius: 5px;
        background-color: blue;
        font-size: 16px;
    }

    button[type="submit"]:hover {
        background-color: darkblue;

    }
</style>

<body>
    <div class="container">
        <form action="" method="POST">
            <center>
                <h2>THONG TIN SIN VIEN</h2>
            </center>
            <label for="">Nhap ten:</label><br>
            <input type="text" name="ten" id="" placeholder="Vui long nhap ten"><br>
            <label for="">Nhap lop:</label><br>
            <input type="text" name="lop" id="" placeholder="Vui long nhap lop"><br>
            <label for="">Nhap ngay sinh:</label><br>
            <input type="text" name="ngaysinh" id="" placeholder="Vui long nhap ngay sinh"><br>
            <label for="">Nhap ma sv:</label><br>
            <input type="text" name="masv" id="" placeholder="Vui long nhap ma sinh vien"><br>
            <br>
            <button type="submit">Them sinh vien</button>
        </form>
    </div>

</body>

</html>