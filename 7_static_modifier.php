<?php 
// Just like private, public, protected we have static modifiers.
// Static means that variable/method is directly linked to class itself. You don't need to create an object.
// Instead of object access symbol "->" we use scope resoultion operator "::"

class Cars {
	static $doors = 4;
	static $wheels = 6;

	static function car_details()
	{
		echo self::$doors."<br>";
		echo self::$wheels;
	}
}

$bmw = new Cars();
echo Cars::$doors;
echo "<br>";
Cars::car_details();