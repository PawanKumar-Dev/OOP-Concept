<?php
// Using inheritence we can use the methods and properties that are defined in an another class. This support the DRY concept.

// "extends" is the keyword. Using tht we can inherit properties of another class, in this case "Cars".

class Cars {
	var $wheels;

	function count_wheel()
	{
		return "This car has ".$this->wheels." wheels";
	}
}

class Trucks extends Cars {

}

$bmw = new Trucks();
$bmw->wheels = 6;

echo $bmw->count_wheel();