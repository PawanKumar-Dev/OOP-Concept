<?php 
// Properties are variable inside a class. Called attributes as well.
// You can use "var" keyword.

// "$this" refers to the current class. It is way to access properties within the methods without creating an object.

class Computer {

	var $processer = 4;

	function cpu_details()
	{
		return "This Pc has no of processer: ".$this->processer;
	}
}

// You can change properties values via objects as well.

$my_pc = new Computer();

$my_pc->processer= 6;

echo $my_pc->cpu_details();
