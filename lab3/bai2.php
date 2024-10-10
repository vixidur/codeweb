<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body {
    background-color: #ccc;
}

.container {
    background-color: white;
    box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.1);
    max-width: 500px;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
    padding: 30px;
    border-radius: 10px;
}

input[type="text"] {
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 5px;
    border: 1px solid blue;
    border-radius: 5px;
}

button[type="submit"] {
    color: white;
    border: none;
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 5px;
    background-color: blue;
    border-radius: 5px;
}

button[type="submit"]:hover {
    background-color: darkblue;
}
</style>

<body>
    <div class="container">
        <form action="" method="POST">
            <h2>NHAP VA TINH DAY SO TREN DAY</h2>
            <label for="">Nhap day so: </label><br>
            <input type="text" name="dayso" required placeholder="Vui long nhap day so"><br>
            <label for="">Tong day so: </label><br>
            <input type="text" name="tong" id="" readonly placeholder="Ket qua"><br>
            <button type="submit">Tinh toan</button>
        </form>
    </div>
</body>

</html>