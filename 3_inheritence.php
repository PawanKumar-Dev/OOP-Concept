<?php
// Inheritence use the dry(don't repeat yourself) principle so that another class can inherit properties and methods of another class.
// Child class inherit its property and methods from parent class.

class AC {
	public $model;
	public $speed;

	public function speedUp() {
		return $speed+1;
	}

	public function speedDown() {
		return $speed-1;
	}

	public function __construct($model, $speed) {
		$this->model = $model;
		$this->speed = $speed;
	}
}


class Smart_AC extends AC {
	public $wifi = "Avail";
}

$ram = new Smart_AC("Blue Star", 5);
echo $ram->model . "<br>";
echo $ram->wifi . "<br>";


$kim = new AC("Diakin", 15);
echo $kim->speed . "<br>";
echo $kim->wifi;