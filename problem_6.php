<?php

$sumOfSquare = 0;
$sum         = 0;
for ($i = 1; $i <= 100; $i++) {
    $sumOfSquare = $sumOfSquare + ($i * $i);
    $sum         = $sum + $i;
}

echo ($sum * $sum) - $sumOfSquare;
