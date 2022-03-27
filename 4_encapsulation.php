<?php 
// Encapsulation is simply the concept of preventing data being accessed or changed inside a class without proper method or authority.
// Like in below example by default you can change value of Ac model by simply assing in new value.
// This kind of situation can be prevented by using access modifiers like: public, private, protected.
// But once your property/method is private you cannot access it directly. Instead you use getter/setter methods. They are simple functions accessing such data.
// Protected type can be accessed within the class or inside inherited class without any restrication.
// If you are over-riding method of parent class in child class. Remember they should have same access modifier level.

class AC {
	private $model;
	protected $speed;

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

	public function getModel() {
		return $this->model;
	}

	public function getACSpeed() {
		return $this->speed;
	}
}


class Smart_AC extends AC {
	public function getSpeed() {
		return $this->speed;
	}
}


$jiten = new AC("Blue Star", 18);
echo $jiten->getModel();
echo "<br>";
echo $jiten->getACSpeed();

echo "<br>";

$ajay = new Smart_AC("Diaken", 16);
echo $ajay->getModel();
echo $ajay->getSpeed();