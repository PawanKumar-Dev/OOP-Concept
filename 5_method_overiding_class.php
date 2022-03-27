<?php
// Method Overiding is way to access same name function of parent class and child class.
// There should be relationship b/w them.
// we use parent::demo()


class plant1 {
	protected $color = "green";

	public function demo() {
		echo "This is plant1";
	}
}


class plant2 extends plant1 {

	public function demo()
	{
		parent::demo();
		echo "This is plant2";
	}
}


$pudina = new plant2;
echo $pudina->demo();