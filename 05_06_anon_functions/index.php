<?php
$names = array("Joe", "Aaron", "William", "Lewis");
usort($names, function($a, $b) {
    return $a[1] <=> $b[1];
});
?>

<pre>
    <?php print_r ($names); ?>
</pre>