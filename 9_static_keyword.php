<?php
// Non-static properties or variable are accessisble using an object only.
// You can access such properties using object directly or using object's method.

class Demo
{
	public $roll = 1; //Non-static property

	public function checkRoll() {  //Non-static method
		return $this->roll;
	}
}

$jit = new Demo;
echo $jit->checkRoll();
echo "<br>";
echo $jit->roll;
echo "<br>";


// On other hand declaring a variable/property static using keyword "static" will make tht property availble without creating an object
// its access is done in format: classname::$variable_name/$method_name

class staticDemo
{
	public static $rollno = 5; //static property/variable

	public static $marks = 45; //static property/variable

	public static function checkRollWith() {
		echo "Here are the marks:";
	}
}

echo staticDemo::$rollno;
echo "<br>";
echo staticDemo::checkRollWith();

?>