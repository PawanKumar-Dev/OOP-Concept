<?php
// Abstraction is OOPs concept which emphasize that we show only the essential part to user and rest should be left in background. In OOPs PHP abstraction is implemented using abstract methods and interfaces.
// Using "abstract" keyword we can make Abstract class in which have a single abstract method or more. You cannot make object of class.
// Any class can contain two types of methods: method with definition, method without defination.
// We can access and use abstract method using child class only.
// Remember we must define the abstract method in child class otherwise it throws error.

abstract class Base {

	public function demo() {  // Method with definiation
		echo "hello";
	}

	abstract public function demo1(); // Method without definition
}


class Child extends Base {
	public function demo1() {
		echo "demo1";
	}
}



$new1 = new Child;
$new1->demo1();
