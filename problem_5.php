<?php

$angka           = 11;
$evenlyDivisible = false;

while (!$evenlyDivisible) {
    $evenlyDivisible = true;
    for ($i = 1; $i <= 20; $i++) {
        if ($angka % $i != 0) {
            $evenlyDivisible = false;
            break;
        }
    }

    $angka++;
}

echo $angka - 1;
