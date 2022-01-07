<?php
setcookie( 'visited', true );

// if(isset($_COOKIE['visited'])){
//     echo "<h1>Welcome Back!</h1>"; 
// } else {
//     echo "<h1>Welcome!</h1>";
// }

$welcome = isset( $_COOKIE['visited'] ) ? "<h1>Welcome Back!</h1>" : "<h1>Welcome!</h1>";
echo $welcome;

