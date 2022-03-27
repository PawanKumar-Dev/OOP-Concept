<?php 
// As we have seen in previous lesson we know that methods or properties can be called after an object is created. Then that object access those methods and properties.
// _constructor function does look like other functions but it is called automatically as soon as object is created.

// $this->os is way to assign new value inside our class variables.

class smartphones {
	public $os = "Android";
	public $ram = 4;

	public function __construct($os, $ram) {
		echo $this->os = $os;
		echo $this->ram = $ram;
	}
}


$mi = new smartphones("iOS", 2);

$samsung = new smartphones("Samsung M30s", 6);














