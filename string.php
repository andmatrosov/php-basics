<?php

/* STRINGS */

$firstName = 'Will'; // нельзя использовать переменные
$lastName = "Smith"; // можно использовать переменные

$fullName = "$firstName $lastName";
$br = '<br>';

echo $fullName . '<br>';

echo $fullName[2] . '<br>'; // l

echo $fullName[-2] . $br; // t

$fullName[-2] = 'T';

echo $fullName . $br;

var_dump($fullName);
echo $br;

// Heredoc - можно использовать переменные
$text = <<<TEXT
Line 1 $firstName
Line 2 $lastName
Line 3 $fullName
Line 4
TEXT;

echo nl2br($text);
echo $br;

// Nowdoc - нельзя использовать переменные
$text2 = <<<'TEXT'
Line 1 $firstName
Line 2 $lastName
Line 3 $fullName
Line 4
TEXT;

echo nl2br($text2);
echo $br;
