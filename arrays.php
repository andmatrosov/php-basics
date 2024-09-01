<?php

/* ARRAYS */

// indexed

echo '<h2>Индекснык массивы</h2>';
echo '<hr>';
$programmingLanguages = ['PHP', 'JAVA', 'Python']; // alternative way  array('PHP', 'JAVA', 'Python');

$br = '<br>';

var_dump(isset($programmingLanguages[1])); // true - элемент с таким индексом существует
echo $br;
var_dump(isset($programmingLanguages[3])); // false - такого элемента нет

$programmingLanguages[] = 'JavaScript';

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

array_push($programmingLanguages, 'C++', 'C#', 'GO');

echo '<hr>';

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo '<h2>Ассоциативные массивы</h2>';
echo '<hr>';

$associatedArr = [
    'php' => [
        'creator' => '',
        'extension' => '',
        'website' => 'php.net',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 8, 'releaseDate' => 'Nov 26, 2020'],
            ['version' => 7.4, 'releaseDate' => 'Nov 26, 2019'],
        ]
    ],
    'python' => [
        'creator' => '',
        'extension' => '',
        'website' => 'python.org',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 3.9, 'releaseDate' => 'Oct 5, 2020'],
            ['version' => 3.8, 'releaseDate' => 'Oct 14, 2019'],
        ]
    ]
];

$associatedArr['js'] = 2023;

echo '<pre>';
print_r($associatedArr);
echo '</pre>';

echo '<br>';
echo '<hr>';

$newLanguage = 'go';

$associatedArr[$newLanguage] = 1.15; // ключем может быть переменная

echo '<pre>';
print_r($associatedArr);
echo '</pre>';

// доступ по ключам
echo $associatedArr['php']['website'];

// Удаление элементов из массива

echo '<h2>Удаление элементов из массива</h2>';
echo '<hr>';

$array = ['a', 'b', 'c', 'd', 'e'];

echo array_pop($array); // удаление с конца массива
echo array_shift($array); // удаление с начала массива

//unset($array); // стирает весь массив
unset($array[1]); // стирает элемент указанного индекса

echo '<pre>';
print_r($array);
echo '</pre>';
echo '<br>';


// превратить элемент в массив
$x = 5;
$y = 'Привет мир';
$z = null;

var_dump((array) $x);
echo '<br>';

var_dump((array) $z);
echo '<br>';

var_dump(explode(' ', $y)); // explode разделяет строку по разделителю
