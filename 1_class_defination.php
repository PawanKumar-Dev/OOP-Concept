<?php
// Defining a class is simple. Using keyword "class" and encircling its defination in a pair of curly braces.

class Cars {

}

// You can check if PHP has made your class using inbuilt function of php "get_declared_classes()" which return an array of all classes.

$my_classes = get_declared_classes();

foreach ($my_classes as $class) {
	echo $class. "<br>";
}

// In last line we can see our custom defined class "Cars" there.