<?php

$a = 10;
$b = 100;

echo"Các số chẵn từ 10 đến 100 là: ";

for ($i = $a; $i <= $b; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
?>