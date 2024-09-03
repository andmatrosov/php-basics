<?php

/** variable scopes */

$x = 5;

function foo() {
    // по умолчанию внешние переменные недоступны внутри функций
    // чтобы получит доступ к внешней переменной нужно:
    // или передать ее как аргумент
    // или объявить внутри новую функцию с таким именем(не будет иметь отношения к внешней переменной даже если имя такое же)
    // или используя ключевое слово global указать какие переменные нам нужны внутри функции
    // или используя $GLOBALS - глобальную переменную, где ключами являются имена переменных
//    global $x;
//    echo $x;

    echo $GLOBALS['x']; // но лучше использовать аргументы, чтобы не нарушать читаемость кода

}

//foo();

//include('file.php');

//echo $x;

function getValue() {
    // кеширование результата дорогой функции
    static $value = null;
    if($value === null) {
        $value = someVeryExpensiveFunction();
    }

    // some more processing with value;

    return $value;
}

function someVeryExpensiveFunction() {
    sleep(2);

    return 10;
}

echo getValue() . '<br>';
echo getValue() . '<br>';
echo getValue() . '<br>';
