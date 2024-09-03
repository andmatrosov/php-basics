<?php

/** variable, anonymous & arrow functions */

//function sum(int|float ...$numbers): int {
//    return array_sum($numbers);
//}
//
//$x = 'sum';
// если переменная вызывает как функция,
// то php ищет функцию с таким же названием как и значение переменной и вызывает ее
//echo $x(1, 2, 3, 4, 5, 6);


function sub(int|float ...$numbers): int {
    return array_sum($numbers);
}

$x = 'sum';

// Здесь мы проверяем есть ли функция с таким названием предотвращая возможную ошибку
if(is_callable($x)) {
    echo $x(1, 2, 3, 4, 5, 6);
} else {
    echo 'Not callable<br>';
}

// Анонимная функция
$z = 1;
// в анонимную функцию передать переменные к которым можно получить доступ внутри функции с помощью use - закрытие
$y = function(int|float ...$numbers) use ($z): int {
    echo $z.'<br>';
    return array_sum($numbers);

    $z = 10; // переменная не переопределиться, т.к. она копируется в функцию по значению.
};

echo $y(1, 2, 2, 6, 8, 2);

echo '<br>';
echo $z;

echo '<hr>';
echo '<br>';

// callbacks
$arr = [1, 2, 3, 4, 5];

$arr2 = array_map(function($el){
    return $el * 2;
}, $arr);

print_r($arr2);


function sum2(callable $callback, int|float ...$numbers): int {
    return $callback(array_sum($numbers));
};


function multi($element) {
    return $element * 2;
}

echo '<br>';
echo sum2('multi', 1,2,3,4, 10,5);
echo '<br>';
echo sum2(function($element) {
    return $element * 2;
}, 1, 2, 3, 4, 5,6);


// Стрелочный синтаксис функции
$arrayNumbers = [1, 2, 4, 5, 6, 7];
$g = 5;

// стрелочная функция не имеет тела, а также может использовать внешние переменные без использования use
$arrayNumbers2 = array_map(fn($number) => $number * $number + $g, $arrayNumbers);
// можно передать несколько выражений с помощью массива
$arrayNumbers3 = array_map(fn($number) => [
    $number * $number + $g,
    $number / $number - $g
    ], $arrayNumbers);

echo '<br>';
echo '<pre>';
print_r($arrayNumbers2);
echo '</pre>';

echo '<br>';
echo '<pre>';
print_r($arrayNumbers3);
echo '</pre>';
