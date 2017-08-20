<?php

$number = 1;
$maxSeq = 0;
while ($number < 1000000) {
    $sequence   = array();
    $counterSeq = 0;
    while ($number != 1) {
        $sequence[$counterSeq++] = $number;
        if ($number % 2 == 0) {
            $number = $number / 2;
        } else {
            $number = (3 * $number) + 1;
        }
    }

    $sequence[$counterSeq] = 1;

    if (sizeof($sequence) > $maxSeq) {
        $maxSeq = sizeof($sequence);
    }

    $number++;
}

echo "<pre>";
print_r($maxSeq);
echo "</pre>";
