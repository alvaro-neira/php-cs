<?php

require_once("utils/NumberUtils.php");

$nu = new NumberUtils;

$n = $nu->decimal2binary(123);
echo $n ."\n";
echo $nu->binary2decimal($n)."\n";

