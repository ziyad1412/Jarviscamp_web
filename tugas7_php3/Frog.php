<?php

require_once("Animal.php");

class Frog extends Animal
{
    public $legs = 4;

    public function jump()
    {
        echo "Jump : Hop Hop";
    }
}
