<?php

class Pet
{
    private $_name;
    private $_color;

    function __construct($name="unknown", $color="?")
    {
        $this->_name = $name;
        $this->_color = $color;
    }

    function eat()
    {
        echo $this->_name . " the " . $this->_color . " cat is eating<br>";
    }

    function talk()
    {
        echo "Pet is talking<br>";
    }

}