<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BẢNG CỬU CHƯƠNG MỞ RỘNG</title>
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
        width: 100%;
        max-width: 1200px;
    }

    h1 {
        text-align: center;
        color: #0056b3;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table,
    th,
    td {
        border: 1px solid #ddd;
    }

    th,
    td {
        padding: 12px;
        text-align: center;
    }

    th {
        background-color: #0066cc;
        color: white;
    }

    td {
        background-color: #f9f9f9;
    }

    @media (max-width: 768px) {
        .container {
            width: 100%;
        }
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>KẾT QUẢ BẢNG CỬU CHƯƠNG</h1>
        <table>
            <?php
            if (isset($_POST['start']) && isset($_POST['end'])) {
                $start = intval($_POST['start']);
                $end = intval($_POST['end']);

                for ($i = $start; $i <= $end; $i++) {
                    echo "<tr>";
                    for ($j = 1; $j <= 10; $j++) {
                        echo "<td>$i x $j = " . ($i * $j) . "</td>";
                    }
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>
</body>

</html>