<?php 
// Polymorphism is simply a concept that one thing can possess many forms.
// Polymorphism in PHP OOPs is done using interface, method overiding, method overloading etc. We will explore them one by one.

// Lets take example of two class: rectangle, circle.
// Area of rectangle: Length*Breadth, Area of Circle: 3.14*radius*radius
// Interface: Shape

// Since we cannot define any variable inside interface. We define a function with no defination.
interface Shape
{
	public function calculateArea();
}


class Rectangle implements Shape
{
	public $length;
	public $breadth;

	public function calculateArea()
	{
		return $this->length* $this->breadth;
	}

	public function __construct($l, $b)
	{
		$this->length = $l;
		$this->breadth = $b;
	}
}


class Circle implements Shape
{
	public $radius;

	public function calculateArea()
	{
		return 3.14 * $this->radius * $this->radius;
	}

	public function __construct($r)
	{
		$this->radius = $r;
	}
}



$bigbox = new Rectangle(25, 25);
echo $bigbox->calculateArea();


echo "<br>";

$bigcircle = new Circle(5);
echo $bigcircle->calculateArea();


// Now we can see that same function calculateArea() is being used in two different classes in different way. This is a simple example of Polymorphism.