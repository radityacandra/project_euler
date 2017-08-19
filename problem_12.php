<?php

function countDivision($number)
{
    $countDivisor = 0;
    for ($divisor = 1; $divisor <= $number; $divisor++) {
        if ($number % $divisor == 0) {
            $countDivisor++;
        }
    }

    if ($number == 1) {
        $countDivisor = 1;
    } elseif ($number == 2) {
        $countDivisor = 2;
    }

    return $countDivisor;
}

$counter          = 1;
$triangularNumber = 1;
while (true) {
    $adder = 2;
    for ($i = 0; $i < $counter; $i++) {
        $triangularNumber = $triangularNumber + $adder;
        $adder++;
    }

    $countDivisor = countDivision($triangularNumber);
    if ($countDivisor > 500) {
        break;
    }

    $counter++;
}

echo "<pre>";
echo $triangularNumber;
echo "</pre>";
