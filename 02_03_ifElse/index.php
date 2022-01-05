<?php 
$a = 10;
$b = 5;

if($a > $b){
    echo '$a is greater than $b';
} else if($a < $b){
    echo '$a is less than $b';
} else {
    echo '$a is equal to $b';
}

$is_logged_in = false;

if ( $is_logged_in ){
    echo '<h3>Logged In</h3>';
} else {
    echo '<h3>Logged Out</h3>';
}

?>