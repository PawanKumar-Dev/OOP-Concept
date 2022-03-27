<?php
// We can handle the Trait conflict using keywords like "insteadof" and "as".
// Lets say we have two traits: t1, t2. Both have test() method of same name.
// When we use both traits in a class Demo. We get conflict.
// to solve this conflict: we use keywords.

trait t1 {

	public function test()
	{
		echo "Test method is Trait t1";
	}
}

trait t2 {

	public function test()
	{
		echo "Test method is Trait t2";
	}
}


class Demo
{
	use t1, t2 {
		t1::test insteadof t2;
		t2::test as testt2;
	}

}

$demo = new Demo;
$demo->test();
$demo->testt2();