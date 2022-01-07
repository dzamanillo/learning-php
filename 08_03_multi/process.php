<?php

foreach ($_POST as $name => $value) {
    if( 'submit' != $name ){

        // implode turns array to string
        if(is_array($value)){
            $value = implode(", ", $value);
        }
        echo "<p><b>" . ucfirst($name) . "</b> is $value</p>";
    }
}