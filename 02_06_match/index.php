<?php

$x = 1;

$result = match($x) {
    1 => '$x is 1',
    2 => '$x is 2',
    default => '$x is neither 1 or 2',
};
echo $result;
