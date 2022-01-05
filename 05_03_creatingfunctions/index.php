<?php
function is_palindrome($string){
    $string = strtolower($string);
    $string = str_replace(" ", "", $string);

    return ( $string == strrev($string));
};

$check_string = "Race Car";
if(is_palindrome($check_string)){
    echo "<p>$check_string is a palindrome</p>";
} else {
    echo "<p>$check_string is not a palindrome</p>";
};