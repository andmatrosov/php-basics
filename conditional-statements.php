<?php
/* Control Structures (if / else / elseif / else if) */
?>
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
$x = 100;
?>

<?php if ($x >= 95): ?>
    <strong>A</strong>
<?php elseif ($x >= 90): ?>
    <strong>B</strong>
<?php elseif ($x >= 80): ?>
    <strong>C</strong>
<?php elseif ($x >= 70): ?>
    <strong>D</strong>
<?php elseif ($x >= 60): ?>
    <strong>E</strong>
<?php else: ?>
    <strong>F</strong>
<?php endif ?>
</body>
</html>
