<?php
$acuan                   = 600851475143;
$bilanganPrima           = 2;
$bilanganPrimaTerpanjang = 0;

if ($acuan % $bilanganPrima == 0) {
    $bilanganPrimaTerpanjang = $bilanganPrima;
}

for ($i = 3; $i < $acuan; $i++) {
    if ($i < intval($acuan / 2) && $acuan % $i == 0) {
        $flagPrima = true;
        for ($x = 2; $x < $i; $x++) {
            if ($i % $x == 0) {
                $flagPrima = false;
                break;
            }
        }

        if ($flagPrima) {
            $bilanganPrima = $i;
        }

        $bilanganPrimaTerpanjang = $bilanganPrima;
    }
}

echo $bilanganPrimaTerpanjang;
