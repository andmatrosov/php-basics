<?php

/* NULL */

$br = '<br>';
// null constant
$x = null; // null or NULL

var_dump($x);
var_dump(is_null($x));
var_dump($x === null);

echo $br;
$y = 123;

var_dump(is_null($y));


var_dump($z);
echo $br;

$o = 123;

var_dump($o);

unset($o);

var_dump($o);

echo $br;

$h = null;
var_dump((int) $h);
echo $br;
var_dump((bool) $h);
echo $br;
var_dump((string) $h);
echo $br;
var_dump((array) $h);
