<?php
// Function overloading is when two or more functions(Or could be one function) has same name but can handle different aruguments or parameter.
// Since Polymorphism means that one function having many forms. Function overloading becomes a part of Polymorphism itself.

// In php defining same name function to achieve method overloading is not possible but we can achieve it using the magic functions.

// __call() magic method takes two arguments first: classname, Second: array of arguments.

// As you can see we are using same function but we can pass multiple arguments. So same function is performing multiple usage. This verify its polymorphism.

class Register {

	public function __construct()
	{
		echo "Overload implemented. <br>";
	}

	public function __call($name, $arguments)
	{
		if ($name == "Overload") {
			$count = count($arguments);

			switch ($count) {
				case "1":
					echo "One Arguments <br>";
					break;

				case "2":
					echo "Two Arguments <br>";
					break;

				case "3":
					echo "Three Arguments <br>";
					break;
				
				default:
					echo "Invalid Arguments <br>";
					break;
			}
		}
	}
}


$object = new Register();
$object->Overload("Raja Kaja");

$object->Overload("Jeet", 45, "Kumar");

$object->Overload("Sonu", 86);

$object->Overload();