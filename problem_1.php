<?php

$sum = 0;
for ($i = 1; $i < 1000; $i++) {
    $irisan = false;
    if ($i % 3 == 0) {
        $irisan = true;
        $sum    = $sum + $i;
    }

    if ($i % 5 == 0 && !$irisan) {
        $sum = $sum + $i;
    }
}

echo $sum;
