<?php 
// Interface is second part of abstraction process. Using interface we can achive 100% abstraction. Interface contains only function without defination. There could be no function with defination in an Interface.

// Interface is a collection of abstract methods. And these method will be public always.
// There could be no variable/properties inside interface.
// A single class can implement multiple interfaces at once. Which is not possible with abstract classes or normal classes.

interface A
{
	function demofunc();
}


class B implements A
{
	public function demofunc()
	{
		return "Hi this!";
	}
}


$new1 = new B;
echo $new1->demofunc();