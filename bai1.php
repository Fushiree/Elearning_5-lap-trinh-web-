<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 500px;
            border-collapse: collapse;
            margin: auto;
        }
        td {
            border: 1px solid;
            height: 50px;
        }
    </style>
</head>
<body>
    <table>
        <?php
        $colors = ['red', 'yellow', 'green'];
        echo "<tr>";
        for ($i = 0; $i < 3; $i++) {
            echo "<td bgcolor='{$colors[$i]}'></td>";
        }
        echo "</tr>";

        for ($row = 1; $row <= 4; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= 3; $col++) {
                echo "<td></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
