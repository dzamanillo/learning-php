<!-- Best practice -->
<?php 
    echo 'Hello World';
?>

<!-- Not recommended -->
<?='Hello World'?>

<!-- Echo is faster -->
<?php
    print 'Hello World';
?>

<?php
echo 'PHP version: ' . phpversion();