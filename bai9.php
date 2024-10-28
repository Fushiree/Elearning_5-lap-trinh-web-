<!DOCTYPE html>
<html>
<head>
    <title>Tính Giai Thừa</title>
</head>
<body>
    <form method="post">
        <label for="number">Hãy nhập số: </label>
        <input type="number" name="number">
        <input type="submit" value="Tính giai thừa">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST["number"]);
        
        function factorial($n) {
            if ($n == 0) {
                return 1;
            } else {
                return $n * factorial($n - 1);
            }
        }

        echo "Giai thừa của " . $number . " là: " . factorial($number);
    }
    ?>
</body>
</html>
