<?php

$str = $argv[1];
echo("'" . $str . "'\n");

echo("isPalindrome = " . (isAlphaNumericPalindrome($str) ? "TRUE" : "FALSE") . "\n");

function isAlphaNumericPalindrome($str)
{
    $ini = 0;
    $end = strlen($str) - 1;
    while ($ini <= $end) {
        $iniStr = strtolower(substr($str, $ini, 1));
        while (!preg_match('/[a-z0-9]/', $iniStr)) {
            $ini++;
            $iniStr = strtolower(substr($str, $ini, 1));
        }
        $endStr = strtolower(substr($str, $end, 1));
        while (!preg_match('/[a-z0-9]/', $endStr)) {
            $end--;
            $endStr = strtolower(substr($str, $end, 1));
        }
        if ($ini > $end) {
            return false;
        }
        if ($iniStr !== $endStr) {
            return false;
        }
        $ini++;
        $end--;
    }
    return true;
}

function isPalindrome($str)
{
    $ini = 0;
    $end = strlen($str) - 1;
    while ($ini <= $end) {
        if (substr($str, $ini, 1) !== substr($str, $end, 1)) {
            return false;
        }
        $ini++;
        $end--;
    }
    return true;
}