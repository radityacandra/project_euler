<?php
$angka         = 3;
$bilanganPrima = 2;
$count         = 1;
$condition     = true;

while ($condition) {
    $flagPrima = true;
    for ($x = 2; $x < $angka; $x++) {
        if ($angka % $x == 0) {
            $flagPrima = false;
            break;
        }
    }

    if ($flagPrima) {
        $bilanganPrima = $angka;
        $count++;
    }

    if ($count == 10001) {
        $condition = false;
    }

    $angka++;
}

echo $bilanganPrima;
