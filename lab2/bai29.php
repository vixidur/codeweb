<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ngày Sinh</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #ffcccc;
            border: 2px solid #d16ba5;
            padding: 20px;
            border-radius: 8px;
            width: 350px;
            text-align: center;
        }

        h2 {
            background-color: #c2185b;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 18px;
        }

        .form-container label {
            font-weight: bold;
            color: #333;
        }

        .form-container input[type="text"] {
            width: 50px;
            padding: 8px;
            margin: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
        }

        .form-container input[type="submit"] {
            background-color: #c2185b;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .form-container input[type="submit"]:hover {
            background-color: #8e0038;
        }

        .result {
            margin-top: 15px;
            font-size: 16px;
            color: #333;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h2>NGÀY SINH</h2>
        <form method="post">
            <label for="ngay">Ngày/tháng/năm sinh:</label><br>
            <input type="text" name="ngay" id="ngay" maxlength="2" placeholder="DD" required>
            <input type="text" name="thang" id="thang" maxlength="2" placeholder="MM" required>
            <input type="text" name="nam" id="nam" maxlength="4" placeholder="YYYY" required><br><br>

            <input type="submit" name="thongbao" value="Thông báo">
        </form>

        <?php
        if (isset($_POST['thongbao'])) {
            // Lấy giá trị ngày, tháng, năm sinh
            $ngay = (int)$_POST['ngay'];
            $thang = (int)$_POST['thang'];
            $nam = (int)$_POST['nam'];

            // Lấy giá trị ngày hiện tại
            $ngay_ht = (int)date("d");
            $thang_ht = (int)date("m");
            $nam_ht = (int)date("Y");

            // Tính tuổi
            $tuoi = $nam_ht - $nam;
            if (($thang_ht < $thang) || ($thang_ht == $thang && $ngay_ht < $ngay)) {
                $tuoi--;
            }

            // Tính số ngày đã qua hoặc còn lại đến sinh nhật
            $ngay_sinh_nhat = mktime(0, 0, 0, $thang, $ngay, $nam_ht);
            $ngay_hien_tai = mktime(0, 0, 0, $thang_ht, $ngay_ht, $nam_ht);

            if ($ngay_hien_tai > $ngay_sinh_nhat) {
                $ngay_sinh_nhat_tiep_theo = mktime(0, 0, 0, $thang, $ngay, $nam_ht + 1);
                $diff_days = ($ngay_hien_tai - $ngay_sinh_nhat) / (60 * 60 * 24);
                $chuoi = "Năm nay bạn $tuoi tuổi.<br>Ngày sinh nhật của bạn đã qua " . (int)$diff_days . " ngày.";
            } elseif ($ngay_hien_tai < $ngay_sinh_nhat) {
                $diff_days = ($ngay_sinh_nhat - $ngay_hien_tai) / (60 * 60 * 24);
                $chuoi = "Năm nay bạn $tuoi tuổi.<br>Còn " . (int)$diff_days . " ngày nữa là đến ngày sinh nhật của bạn.";
            } else {
                $chuoi = "Chúc mừng sinh nhật! Năm nay bạn $tuoi tuổi.";
            }

            // Hiển thị kết quả
            echo "<div class='result'>$chuoi</div>";
        }
        ?>
    </div>

</body>

</html>
