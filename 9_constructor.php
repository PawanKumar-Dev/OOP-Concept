<?php 
// Constructor function/method is part of magic function. Construct get called automatically whenever the class is instantiated/ an object of that class is made.
// Only 1 constructor can be made for 1 class.

class Cars
{
	private $serial_no = 5963;
	
	public function __construct()
	{
		echo $this->serial_no;
	}
}

$bmw = new Cars();