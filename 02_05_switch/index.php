<?php

$total = 10;
switch ($total){
    case 1:
        echo '$total is 1';
        break;
    case 2:
        echo '$total is 2';
        break;
    default:
        echo '$total is more than 2';
}

$turtle = 'Leo';
$bandana = '';
switch($turtle){
    case 'Leo':
        $bandana = "blue";
        break;
    case 'Raph':
        $bandana = "red";
        break;
    case 'Mike':
        $bandana = "orange";
        break;
    case 'Don':
        $bandana = "purple";
        break;        
}

echo $bandana;