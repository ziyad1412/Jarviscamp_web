<?php 
 
 class Animal
 {
    public $name;
    public $legs = 4;
    public $cold_blooded = false;

    public function __construct($nama)
    {
        $this->name = $nama;
    }

    function get_cold_blooded() {
        if ($this->cold_blooded == false) {
            return "cold blooded : no";
        }
      }
 }
