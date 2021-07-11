<?php

class House {
    //Properties
    public $name;
    public $number;

    public function __construct($name, $number) {
        $this->name = $name;
        $this->number = $number;
    }

    public function getAddress() {
        $house = $this->name . " " . $this->number. " ";
        return $house;
    }
}

?>