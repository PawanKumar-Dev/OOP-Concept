<?php 
// Inside a class every function is called a method. Defining them is simple like any function.

class Airplanes {
	
	function flying_high() {

	}

	function flying_low() {

	}
}

// Just like class we can count and keep track of all methods in a class using pre-built function of php "get_class_methods('class')"

$my_methods = get_class_methods('Airplanes');

foreach ($my_methods as $method) {
	echo $method ."<br>";
}

