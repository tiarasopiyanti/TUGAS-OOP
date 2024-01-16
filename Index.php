<?php 

require_once 'Animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

$sheep = new Animal("Shaun");
echo "<br/> Name: " . $sheep->name;
echo "<br/> Legs: " . $sheep->legs;
echo "<br/> Cold blooded: " . $sheep->cold_blooded;

echo "<br/>";
$kodok = new Frog("Buduk");
echo "<br/> Name: " . $kodok->name;
echo "<br/> Legs: " . $kodok->legs;
echo "<br/> Cold blooded: " . $kodok->cold_blooded;
echo "<br/>";
$kodok->jump();

echo "<br/>";
$sungokong = new Ape("Kera sakti");
echo "<br/> Name: " . $sungokong->name;
echo "<br/> Legs: " . $sungokong->legs;
echo "</br> Cold blooded: " . $sungokong->cold_blooded;
echo "<br/>";
$sungokong->yell();
?>