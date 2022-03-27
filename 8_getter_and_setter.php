<?php 
// Getter and setter are functions which usually access and set values in Private properties. Since accessing them directly is not possible.

class Cars {

	private $model = "Default";

	public function getModel()
	{
		return $this->model;
	}

	public function setModel($m)
	{
		return $this->model = $m;
	}
}

$myCar = new Cars();
echo $myCar->getModel()."<br>";

$myCar->setModel("BMW");
echo $myCar->getModel();