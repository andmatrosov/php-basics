<?php

// Functions

// Определение функции в PHP
function sayHello($name) {
    return "Hello, " . $name . "!";
}

// Вызов функции
echo sayHello("Андрей"); // Выведет: Hello, Андрей!

// Функция с параметром по умолчанию
function greet($name = "Guest") {
    return "Welcome, " . $name . "!";
}

echo greet(); // Выведет: Welcome, Guest!
echo greet("Андрей"); // Выведет: Welcome, Андрей!

// Функция с несколькими параметрами
function add($a, $b) {
    return $a + $b;
}

echo add(2, 3); // Выведет: 5

// Функция с типом возвращаемого значения
function multiply(int $a, int $b): int {
    return $a * $b;
}

echo multiply(4, 5); // Выведет: 20

// Рекурсивная функция
function factorial($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

echo factorial(5); // Выведет: 120

// Анонимная функция (лямбда-функция)
$greet = function($name) {
    return "Hello, " . $name . "!";
};

echo $greet("Андрей"); // Выведет: Hello, Андрей!

// Стрелочная функция (arrow function)
$double = fn($n) => $n * 2;

echo $double(5); // Выведет: 10

// Функции в PHP могут быть объявлены внутри других функций
function outerFunction() {
    echo "This is the outer function.\n";

    // Внутренняя функция, объявленная внутри внешней функции
    function innerFunction() {
        return "This is the inner function.\n";
    }

    // Вызов внутренней функции
    echo innerFunction();
}

outerFunction(); // Выведет: "This is the outer function." и "This is the inner function."

// Попытка вызвать innerFunction() вне outerFunction() приведет к ошибке
// echo innerFunction(); // Это вызовет ошибку, так как функция не объявлена в глобальной области видимости

// Объявление функций внутри условий
$condition = true;

if ($condition) {
    function conditionalFunction() {
        return "Conditional function called.\n";
    }
}

// Вызов функции, объявленной внутри условия
if (function_exists('conditionalFunction')) {
    echo conditionalFunction(); // Выведет: "Conditional function called."
} else {
    echo "Function does not exist.\n";
}

// Если условие не выполнено, функция не будет объявлена
$condition = false;

if ($condition) {
    function anotherConditionalFunction() {
        return "This will not be printed.\n";
    }
}

// Вызов этой функции приведет к ошибке, если $condition = false
// echo anotherConditionalFunction(); // Это вызовет ошибку, если функция не объявлена

// Типы данных параметров и возвращаемых значений
function add1(int $a, int $b): int {
    return $a + $b;
}

echo add1(3, 5); // Выведет: 8

// Если передать тип данных, не соответствующий ожидаемому, будет ошибка
// echo add(3, "5"); // В строгом режиме (strict mode) это вызовет ошибку, так как "5" не является int

// Функция с типом данных в параметрах и возвращаемым значением
function divide(float $a, float $b): float {
    if ($b == 0) {
        throw new Exception("Division by zero");
    }
    return $a / $b;
}

echo divide(10.0, 2.0); // Выведет: 5
