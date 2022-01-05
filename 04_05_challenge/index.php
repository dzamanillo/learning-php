<?php

$max = 200;
$start = array(1, 1);

for($i = 0; $i <= $max; $i++) {
    $num = $start[$i] + $start[$i + 1];

    if($num < $max) {
        // echo "<p>$start[$i]</p>";
        array_push($start, $num);
    } else {
        echo '<pre>';
            print_r($start);
        echo '</pre>';
        return;
    }  
}