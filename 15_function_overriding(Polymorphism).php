<?php
// Method overiding is another part of polymorphism. In this, we can create same name function inside different classes and then call them.
// Both classes should have a relationship(usually one is extends or inherited)

// Demo class extends to Test.
// Intially, only Test class the had the show() method. And even if you made object of Demo class. Show() function of Test class runs automatically.

// But once we write a show() function inside the Demo() class. This one overrite the Test class show().

// if you want to call both class show() functions we use the function overriding concept.  parent::show(); This calls the Test class show() function as well

class Test
{
	
	public function show()
	{
		echo "Show function from Test class";
	}
}


class Demo extends Test
{
	
	public function show()
	{
		parent::show();
		echo "Show function from Demo class";
	}
}

$demo = new Demo();
$demo->show();
