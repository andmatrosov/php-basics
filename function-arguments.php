<?php

/** Functions params */
declare(strict_types=1);

function foo(int|float $x, int|float $y = 1): int|float {
    return $x + $y;
}

//echo foo(1, 15);

// spred

function sum(int|float $x, int|float $y, int|float ...$numbers): int|float {
    return $x + $y + array_sum($numbers);
}

$numbers = [31, 4, 14, 1];

//echo sum(10, 40, ...$numbers);


// Порядок аргументов функции

function separate(int $x, int $y) {
    if($x % $y === 0) {
        return $x / $y;
    }

    return $x;
}

$x = 20;
$y = 5;


echo separate(y: $y, x: $x); // если порядок аргументов перепутан, можно явно указать где какой именно параметр
