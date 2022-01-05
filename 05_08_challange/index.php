//* Sort this array of Person objects by last then first names

<?php

class Person {

    function __construct($first, $last){
        $this->first = $first;
        $this->last = $last;
    }

    public function get_name(){
        return $this->first . " " . $this->last;
    }
}

$rob = new Person("Rob", "Casabona");
$joe = new Person("Joe", "Casabona");
$erin = new Person("Erin", "Casabona");
$steve = new Person("Steve", "Wozniack");
$bill = new Person("Bill", "Gates");
$walt = new Person("Walt", "Disney");
$bob = new Person("Bob", "Iger");

$people = array($rob, $joe, $erin, $steve, $bill, $walt, $bob);

usort($people, function($a, $b){
    return [$a->last, $a->first] <=> [$b->last, $b->first];
});
?>

<pre>
<?php print_r($people); ?>
</pre>