<?php 
// class is a blueprint of sort. But we can use them to create Objects.
// Process of creating objects from "class" is called instantiating.

class Cars {

	function speed_up()
	{
		echo "car is speeding up";
	}
}


// We can access the speed_up() method by first instantiating the object of "Cars" class and then calling the method via that object.

$maruti = new Cars();
$maruti->speed_up();