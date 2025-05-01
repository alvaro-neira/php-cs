<?php

if("0e1234"==="0"){
    echo "equals";
} else {
    echo "not equals";
}

$x=3.14;
echo is_double($x);

class A{}

class B{}

class C extends A {}

$a= array(null=>"a",'0=>asd');
echo count($a)."\n";

echo chr(66)."\n";