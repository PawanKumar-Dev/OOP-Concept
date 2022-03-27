<?php 
// Traits are feature introduced in 5.4 to overcome some limitation of simple inheritence.

// We can see Demo class is extended to class One, Two and Three. And all three will have access to test() method whether they want it or not. This can be a problem in certain cases.
// To overcome this we use Traits.

class Demo
{
	public function test()
	{
		echo "Test Method inside Demo class";
	}
}

// Trait is defined by keyword: "trait"
trait t1 {
	public function test1()
	{
		echo "Test 1 method of Trait t1";
	}
}

trait t2 {
	public function test2()
	{
		echo "Test 2 method of Trait t2";
	}
}


class One extends Demo
{
	
}


class Two extends Demo
{
	
}


class Three extends Demo
{
	use t1,t2;
}

// Before using trait concept if we instantiated the class Three. We get test() method running.
// But when we "use" our defined trait method. we get:
// You can even use multiple traits inside one class.
$three = new Three();
$three->test1();
$three->test2();
