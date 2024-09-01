<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
# 4 Scalar Types
    # bool - true / false
    $completed = true;
    # int - 1, 2, 3, 0, -5 (no decimal)
    $score = 75;
    # float - 1.5, 0.1, 0.005, =15.0
    $price = 0.99;
    # string - "text", 'hello world'
    $greeting = 'Hello Andrew';

    echo $completed . '<br>';
    echo $score . '<br>';
    echo $price . '<br>';
    echo $greeting . '<br>';

    var_dump($completed);
    echo gettype($completed);
    echo '<br>';

# 4 Compound Types
    # array
    $companies = [1, 2, 3, 0.5, -9.2, 'A', 'b', true];
    print_r($companies);
    # object
    # callable
    # iterable

# 2 Special Tyoes
    # resource
    # null


function sum(float $x, int $y) {
    return $x + $y;
}

echo sum(2, 3);
?>
</body>
</html>
