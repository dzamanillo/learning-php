<?php
$is_logged_in = true;
if($is_logged_in){
    $message = "Welcome Back!";
} else {
    $message = "Hello There!";
}

// this is same as above
$message = $is_logged_in ? "Welcome Back!" : "Hello There!";
echo $message;

// with concatenation
$note = "Welcome" . ($is_logged_in ? " back!" : "!");
echo $note;

// without var
echo "Welcome" . ($is_logged_in ? " back!" : "!");

// isset() is a method that checks whether a variable exists
$name = "Dan";
$name = isset ($name) ? $name : "Joe";
echo $name;

// elvis ternary shorthand for above
$name = $name ?: "Joe";

