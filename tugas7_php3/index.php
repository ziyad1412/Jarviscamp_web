<?php

require('animal.php');
require('Ape.php');
require('Frog.php');

$sheep = new Animal("shaun");

echo "Name : " . $sheep->name; // "shaun"
echo "<br>";
echo "legs : " . $sheep->legs; // 4
echo "<br>";
echo $sheep->get_cold_blooded(); // no
echo "<br><br>";

$kodok = new Frog("buduk");
echo "Name : " . $kodok->name; // "buduk"
echo "<br>";
echo "legs : " . $kodok->legs; // 2
echo "<br>";
echo $kodok->get_cold_blooded(); // no
echo "<br>";
echo $kodok->jump(); // Hop Hop
echo "<br><br>";

$monyet = new Ape("kera sakti");
echo "Name : " . $monyet->name; // "kera sakti"
echo "<br>";
echo "legs : " . $monyet->legs; // 4
echo "<br>";
echo $monyet->get_cold_blooded(); // no
echo "<br>";
echo $monyet->yell(); // Auooo
