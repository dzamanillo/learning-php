<?php

for ( $i = 0; $i < 10; $i++){
    echo "<p>$i</p>";
};

$color = array("red", "green", "blue", "yellow");

// use sizeof instead of .length
for ( $i = 0; $i < sizeof($color); $i++ ){
    echo "<p>$color[$i]</p>";
}