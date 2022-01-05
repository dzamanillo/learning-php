<?php
function math($a, $b = 2, $op = "multiply" ){
    if("add" == $op) {
        return $a + $b;
    } else if("sub" == $op) {
        return $a - $b;
    } else if("div" == $op) {
        return $a / $b;
    }

    return $a * $b;
}

// example of skipping $b as an optional arg
echo math(12, op: "add");
