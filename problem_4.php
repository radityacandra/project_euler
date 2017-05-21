<?php

$multiply          = 0;
$palindrome        = 0;
$biggestPalindrome = 0;
for ($i = 100; $i < 1000; $i++) {
    for ($x = 10; $x <= $i; $x++) {
        $multiply = $i * $x;

        $string       = str_split((string) $multiply);
        $isPalindrome = true;
        $midValue     = 0;
        if (sizeof($string) % 2 != 0) {
            $midValue = ((sizeof($string) + 1) / 2) - 1;
            for ($y = 0; $y < $midValue; $y++) {
                if ($string[$y] != $string[((sizeof($string) - 1) - $y)]) {
                    $isPalindrome = false;
                }
            }
        } else {
            $midValue = (sizeof($string) / 2);
            for ($y = 0; $y < $midValue; $y++) {
                if ($string[$y] != $string[((sizeof($string) - 1) - $y)]) {
                    $isPalindrome = false;
                }
            }
        }

        if ($isPalindrome) {
            $palindrome = (integer) implode("", $string);

            if ($palindrome > $biggestPalindrome) {
                $biggestPalindrome = $palindrome;
            }
        }
    }
}

echo $biggestPalindrome;
