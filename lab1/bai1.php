<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diện tích hình chữ nhật</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        form {
            width: 300px;
            height: 300px;
        }

        .chu {
            width: 100%;
            height: 50px;
            background: orange;
            text-align: center
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        input {
            font-size: 18px;
        }

        .nut {
            width: 100%;
            height: 30px;
            margin-bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .bang {
            background-color: #FEEBCB;
        }

        td {
            padding: 5px;
        }

        .txt_dientich {
            background: pink;
        }
    </style>

</head>

<body>
    <form method="POST">
        <div class="chu">
            <h2>Diện tích hình chữ nhật</h2>
        </div>
        <div class="bang">
            <table>
                <tr>
                    <td>Chiều dài</td>
                    <td><input type="number" name="txt_cd"
                            value="<?php echo isset($_POST['txt_cd']) ? $_POST['txt_cd'] : ''; ?>"></td>
                </tr>
                <tr>
                    <td>Chiều rộng</td>
                    <td><input type="number" name="txt_cr"
                            value="<?php echo isset($_POST['txt_cr']) ? $_POST['txt_cr'] : ''; ?>"></td>
                </tr>
                <tr>
                    <td>Diện tích</td>
                    <td><input class="txt_dientich" type="number" name="txt_dientich" read only value="<?php
                    if (isset($_POST['txt_ketqua']) && $_POST['txt_cd'] != 0) {
                        echo $_POST['txt_cd'] * $_POST['txt_cr'];
                    }
                    ?>"></td>
                </tr>
            </table>
            <div class="nut">
                <td colspan="2"><input type="submit" name="txt_ketqua" value="Tính"></td>
            </div>
        </div>
    </form>
</body>

</html>