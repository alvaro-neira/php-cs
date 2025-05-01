<?php
/**
 * Microsoft Excel numbers cells as 1...26 and after that AA, AB.... AAA, AAB...ZZZ and so on.
Given a number, convert it to that format and vice versa.
 */

const ASCII_POS = 65;

function changeBaseExcel(int $n, int $base) {
    // n=n+1;
    $rem = $n % $base;
    $retVal = '' . number2excel($rem, $base);

    while ($n > 0) {
        $n = (int) floor($n / $base);
        if ($n === 0) {
            break;
        }
        $n = $n - 1;
        $rem = ($n) % $base;

        $retVal = number2excel($rem, $base) . $retVal;

    }
    return $retVal;
}

function number2excel(int $n, int $base) {
    $base = $base ? $base : 26;
    return chr($n + ASCII_POS + 26 - $base);
}

for ($i = 0; $i < 1000; $i++) {
    echo changeBaseExcel($i, 26) . "\n";
}
