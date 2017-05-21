<?php

$acuan1   = 1;
$acuan2   = 2;
$sum      = 0;
$sumGenap = 0;
while ($sum < 4000000) {
    $sum = $acuan1 + $acuan2;

    if ($sum % 2 == 0) {
        $sumGenap = $sumGenap + $sum;
    }

    $acuan1 = $acuan2;
    $acuan2 = $sum;
}

echo $sumGenap + 2;
