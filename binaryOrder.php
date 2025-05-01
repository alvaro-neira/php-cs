<?php
/**
 * Given n, output the numbers from 0 to 2^n-1 (inclusive) in n-bit binary form,
 * in such an order that adjacent numbers in the list differ by exactly 1 bit.
 */
require_once("utils/NumberUtils.php");

$nu = new NumberUtils;

function binaryToGray($num) {
    return ($num >> 1) ^ $num;
}

$n = 5;
for ($i = 0; $i <= pow(2, $n - 1); $i++) {
    echo($nu->decimal2binary(binaryToGray($i)))."\n";
}