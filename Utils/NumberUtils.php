<?php

class NumberUtils
{
    public function decimal2binary(int $n):string {
        $rem = $n % 2;
        $retVal = '' . $rem;
        while ($n > 0) {
            $n = floor($n / 2);
            $rem = $n % 2;
            $retVal = $rem . $retVal;
        }
        return $retVal;
    }

    public function binary2decimal(string $str):int {
        $len = strlen($str);
        $retVal = 0;
        for ($i = $len - 1; $i >= 0; $i--) {
            $digit = substr($str,$i,1);
            $retVal += pow(2, $len - $i - 1) * $digit;
        }
        return $retVal;
    }
}