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
        form{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <form action="bai5.php" method="post">
        <label for="rows">Hãy nhập số hàng: </label>
        <input id="rows" name="rows" type="number" required>
        <br>
        <input type="submit" value="Tạo bảng">
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $a = intval(value: $_POST["rows"]) ;

echo "<table>";

for ($i = 1; $i <= $a; $i++) {
    echo "<tr><td>Hàng $i</td></tr>";
}

echo "</table>";
}
?>
</body>
</html>
