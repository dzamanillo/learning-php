<!-- // Indexable Arrays link JS start at 0

// Associative array kind of like JS object

// Multidimensional is an array of arrays -->

<?php
// Indexable array
$colors = array('red', 'blue', 'green');
print_r($colors);

echo '<p>' . $colors[1] . '</p>';

$colors[] = 'yellow';
print_r($colors);

// Associative Arrays
$home_towns = array(
    'Joe' => 'Middletown, NY',
    'Erin' => 'West Chester, PA',
    'Dave' => 'Scranton, PA',
    'Brian' => 'Grand Rapids, MI',
);

echo '<pre>';
print_r($home_towns);
echo '</pre>';

echo '<p>' . $home_towns['Dave'] . '</p>';

?>