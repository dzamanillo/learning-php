<?php

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $color){
    echo "<p>$color</p>";
};

$home_towns = array(
    'Joe' => 'Middletown, NY',
    'Erin' => 'West Chester, PA',
    'Dave' => 'Scranton, PA',
    'Brian' => 'Grand Rapids, MI',
);

foreach ($home_towns as $name => $town){
    echo "<p>$name lives in $town</p>";
}