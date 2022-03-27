<?php 
// Method overriding working in conjunction with trait is important concept showing how the php interpretor run its code.

// We three block of codes.
// First: Abc class having test() method
// Second: t1 trait having test() method
// Third: Demo class having test() method but extending to Abc class and using t1 trait as well.
// Now when we run test() method of Demo class object. since all class and trait have same name method. Method overiding happens.


// Demo class method runs first.
// If Demo class method is removed then trait t1 method is run.
// If trait t1 is also removed then only our class Abc method.
class Abc
{
	
	public function test()
	{
		echo "Abc class---Test() method.";
	}
}


trait t1
{
	public function test()
	{
		echo "t1 Trait---Test() method.";
	}
}



class Demo extends Abc
{
	use t1;
	
	public function test()
	{
		echo "Demo class---Test() method.";
	}
}


$demo = new Demo();
$demo->test();