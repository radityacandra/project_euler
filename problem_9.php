<?php
$searchedA = 0;
$searchedB = 0;
$searchedC = 0;

$escape = false;

for ($c = 1000; $c > 3; $c--) {
    for ($b = ($c - 1); $b > 2; $b--) {
        for ($a = ($b - 1); $a > 1; $a--) {
            if ((($a * $a) + ($b * $b)) == ($c * $c)) {
                //these tree numbers are phytagoras
                if (($a + $b + $c) == 1000) {
                    $searchedA = $a;
                    $searchedB = $b;
                    $searchedC = $c;
                    $escape    = true;
                }
            }

            if ($escape) {
                break;
            }
        }

        if ($escape) {
            break;
        }
    }

    if ($escape) {
        break;
    }
}

echo $searchedA * $searchedB * $searchedC;
