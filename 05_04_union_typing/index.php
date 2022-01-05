<?php

// variable must be int or float
function double(float|int $a) {
    return $a * 2;
};

echo double(2);
echo "<br>";
echo double(3.5);
echo "<br>";
// error
// double("hello");

function add(int $a, int|float $b) {
    return $a + $b;
}
echo add(2, 2.5);