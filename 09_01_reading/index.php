<?php

// * immediately puts on screen
// readfile( 'treasure-island.txt');

// * used to store to a variable
// $text = file_get_contents('treasure-island.txt');
// echo $text;

$lines = file( 'treasure-island.txt');
// var_dump($lines);

$casabona = file_get_contents( 'https://alpha.lawflip.com/');

if(strpos($casabona, 'wp-content' )){
    echo "bingo";
} else{
    echo "nope";
}
