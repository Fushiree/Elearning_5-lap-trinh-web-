<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 1px solid black;
            border-collapse:collapse ;
        }
        td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<form method="post" action="bai7.php">
        <label for="rows">Nhập số dòng:</label>
        <input type="number" id="rows" name="rows" required>
        <br>
        <label for="cols">Nhập số cột:</label>
        <input type="number" id="cols" name="cols" required>
        <br>
        <input type="submit" value="Tạo bảng">
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dong = intval($_POST["rows"]);
    $cot = intval($_POST["cols"]);

    echo "<table>";

    for ($i = 1; $i <= $dong; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $cot; $j++) {
            echo "<td>hàng $i, hàng $j</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}
?>

</body>
</html>
