<?php

$a = 0;
echo"Tổng các số chia hết cho 13 là: ";
for ($i = 2839; $i <= 7827; $i++) {
    if ($i % 13 == 0) {
        $a++;
    }
}
echo $a;
?>