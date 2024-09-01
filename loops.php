<?php

/* LOOPS */

// while
//$i = 0;

//while($i <= 15) {
//    echo $i++;
//}

//while(true) {
//    while($i > 10) {
//        break 2; // прерывает оба цикла
//    }
//    echo $i++;
//}

//while ($i <= 15) {
//    if($i % 2 === 0) {
//        $i++;
//        continue;
//    }
//    echo $i++ . ', ';
//}
//
//while ($i <= 15):
//    if($i % 2 === 0) {
//        $i++;
//        continue;
//    }
//    echo $i++ . ', ';
//endwhile;

// do-while
// данный цикл выполнится минимум 1 раз
//do {
// echo $i++;
//} while($i <= 15);

// for

//$text = ['a', 'b', 'c', 'd'];
//$length = count($text);
// для улучшения производительности стоит заранее вычислить длину массива отдельно
// или внутри определения цикла

//for ($i = 0, $length = count($text); $i < $length; $i++) {
//    echo $text[$i] . '<br>';
//}

// foreach
$programmingLanguages = ['php', 'js', 'go', 'c++'];

foreach($programmingLanguages as $i => &$language) { // добавление & к переменной делает ее ссылочной, что позволяет менять значения в исходном массиве
    echo "[$i]".$language.'<br>';
}

// unset($language); // - отвязывает ссылоку на последний элемент массива

$language = 'php'; // — из-за того, что после цикла $language остаётся ссылкой на последний элемент массива — можно его перезаписать даже после цикла

print_r($programmingLanguages);
echo '<br>';

$user = [
    'name' => 'Andrew',
    'email' => 'mail@mail.com',
    'skills' => ['php', 'python', 'c++', 'javascript']
];

foreach($user as $key => $value) {
    if(is_array($value)) {
        $value = implode(', ', $value);
    }

    echo $key . ": " . $value . '</br>';
}
