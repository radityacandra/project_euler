<?php
$angka = 3;
$sum   = 2;

while ($angka < 2000000) {
    $flagPrima = true;
    for ($x = 2; $x < $angka; $x++) {
        if ($angka % $x == 0) {
            $flagPrima = false;
            break;
        }
    }

    if ($flagPrima) {
        $sum = $sum + $angka;
    }

    $angka++;
}

echo $sum;
