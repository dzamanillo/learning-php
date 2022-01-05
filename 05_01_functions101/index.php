<?php
//syntax
function hello_world() {
    echo "Hello World!";
};
?>

<p><?php hello_world();?></p>

<?php
// with arguments
function is_bigger($a, $b) {
    return $a > $b;
};

$bigger = is_bigger(10, 5);

echo $bigger;