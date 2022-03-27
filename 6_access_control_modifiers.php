<?php 
// Using certain keyword: public, protected, private. We can control which property or method can be accessed outside the class or inside only.

// Public: available everywhere. Inside and Outside the class.
// Protected: available only in class and its sub-class(child class).
// Private: available only in class.

class Cars {

	public $wheel_count = 4;
	protected $doors = 4;
	private $seats = 2;

	function car_details()
	{
		return $this->wheel_count."<br>".$this->doors."<br>".$this->seats ;
	}
}

$bmw = new Cars();

echo $bmw->car_details();

echo $bmw->wheel_count;
echo $bmw->doors;
echo $bmw->seats;