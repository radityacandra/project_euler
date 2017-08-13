<?php
$angka = 3;
$sum   = 2;

while ($angka < 2000000) {
    $flagPrima = true;
    if ($angka % 2 == 0) {
        $angka++;
        continue;
    } else {
        for ($x = 2; $x < ($angka / 2); $x++) {
            if ($angka % $x == 0) {
                $flagPrima = false;
                break;
            }
        }

        if ($flagPrima) {
            print_r($angka);
            echo "<br>";
            $sum = $sum + $angka;
            print_r($sum);
            echo "<br><br>";
            $angka++;
        } else {
            $angka = $angka + 2;
        }
    }
}

echo "Sum Bilangan Prima adalah: " . $sum;
