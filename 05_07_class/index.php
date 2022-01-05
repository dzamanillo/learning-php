<?php
class Person {

    //! below isn't needed in php 8
    // var $name;
    // var $age;
    // var $birthday = false;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function get_name(){
        return $this->name;
    }

    public function set_name($new_name){
        $this->name = $new_name;
    }

    public function get_age(){
        return $this->age;
    }

    public function set_age($new_age){
        $this->age = $new_age;
    }

    public function set_birthday( $b){
        $this->birthday = $b;
        $this->update_age();
    }

    private function update_age(){
        $this->age = ($this->birthday) ? ++$this->age : $this->age;
    }


}


$dan = new Person("Dan", 30);

echo $dan->get_name();
$dan->set_birthday(true);
echo $dan->get_age();