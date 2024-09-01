<?php

/* FLOATS */

$x = 13_000.5;

var_dump($x);
echo '<br>';
echo $x;
echo '<br>';
echo PHP_FLOAT_MAX;

$y = floor((0.1 + 0.7) * 10); // 7, потому что 0.1 + 0.7 = 0.79999...
// функция floor округляет в меньшую сторону.
echo '<br>';
echo $y;

$z = ceil((0.1 + 0.2) * 10); // 4, потому что 0.1 + 0.2 = 0.300000000004
// функция ceil округляет в большую сторону
echo '<br>';
echo $z;
echo '<br>';
echo '<hr>';

$a = 0.23;
$b = 1 - 0.77;

if($a === $b) {
    echo $a .'<br>';
    echo $b .'<br>';
    echo 'Yes';
} else {
    echo $a .'<br>';
    echo $b .'<br>';
    echo 'No';
}

echo '<br>';
echo PHP_FLOAT_MAX * 2; // infinity (INF)

$c = PHP_FLOAT_MAX * 2;

echo '<br>';
var_dump(is_infinite($c)); // true проверка на бесконечное число
echo '<br>';
var_dump(is_finite($c)); // false проверка на конечное число
echo '<br>';
var_dump(is_nan($c)); // false проверка на NAN

//Преобразование в float

$g = 5;
echo '<br>';
var_dump((float) $g);
