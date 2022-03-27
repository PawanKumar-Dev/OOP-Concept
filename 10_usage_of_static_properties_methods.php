<?php
// static properties/variable are particalry useful in case where its value is going to be not changeable too frequently and could be shared among many objects.

// Use of static property save you the hassle of making a new object everytime which also saves memory on server.

// Our IRCTC website/class has simple functionality.

// We have a varible to keep track of visitors. A method to show total users. And a constructor which automatically increase the count by 1 when new visitor(an object) is made out of IRCTC class

// But whenever we create an object(a simiulated visitor) our count increse by 1. But next time it stays the same becoz there is no way to link 1 object to another.

// In such case "static" keyword is very important. As it can be linked with many objects and therefore remember the total count of visitors.

// But once we make the variable static. we can see that its count get updated since it can be shared among multiple objects.

// With static variables we cannot use $this, instead we have to use self::$variable

class IRCTC {
	public static $countVisitor;

	public function showTotalVisitor()
	{
		return self::$countVisitor;
	}

	public function __construct()
	{
		self::$countVisitor++;
	}
}

$first_visitor = new IRCTC;
$second_visitor = new IRCTC;
echo $second_visitor->showTotalVisitor();
