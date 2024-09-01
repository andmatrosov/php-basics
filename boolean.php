<?php

/* BOOLEANS */

$isCompleted = true;

// integers 0 -0 = false
// floats 0.0 -0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false

if ($isCompleted) {
    // do something
    echo 'success';
} else {
    // do somethig else
    echo 'fail';
}
