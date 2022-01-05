<?php
$min = 1;
$max = 50;
$guess = 17; //* Change to test
//$num = 16; //* Change to test

//Bonus
$num = rand($min, $max);
echo $num;

//? Option 1
if($guess > $max || $guess < $min){
    echo 'Your guess is out of the allowed range';
    return;
};
if($num === $guess){
    echo 'Correct';
};
if($num < $guess){
    echo 'Your guess is to high';
};
if($num > $guess){
    echo 'Your guess is to low';
};

//? Option 2
$result = $num === $guess ? 'Correct!' : "Incorrect!";
echo $result;

//? Option 3
switch($num){
    case $num > $max || $num < $min:
        echo 'Your guess is out of the allowed range';
        break;
    case $num < $guess:
        echo 'Your guess is to high';
        break;
    case $num > $guess:
        echo 'Your guess is to low';
        break;
    default:
        echo 'Your guess is correct!';
};


