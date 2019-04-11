<?php
class Bird {
    var $wings = 2;
    var $legs = 2;
    var $eyes = 2;
    var $head = 1;
    var $peek = 1;
    var $tail = 1;

    function fly() {
        $this->wings = "flys";
    }
    function walk() {
        $this->legs = "walks";
    }
    function eat() {
        $this->peek = "eats";
    }
}

$pigion = new Bird();
//$pigion->fly();
echo $pigion->wings . "<br>";

$penguine = new Bird();
$penguine->fly();
$penguine->wings = "no fly";
echo $penguine->wings;


?>

