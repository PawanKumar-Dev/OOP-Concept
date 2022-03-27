<?php
// Namespace is a folder like structure that can let us make same name class and function without making any conflict.
// Everything inside the namespace should remain inside. No object/class/function can be created outside of it. It makes them local.

// But in a nameless namespace, we can access other namespace's class object.
// Class declared inside a nameless namespace is global by nature.
namespace abc {

	class xyz {
		
		public function __construct()
		{
			echo "'xyz' class from 'abc' namespace.";
		}
	}
}


namespace {

	class xyz {

		public function __construct()
		{
			echo "'xyz' class from nameless namespace.";
		}
	}

// This is one way to access other class(its functions and properties) in current namespace.	
	$obj = new abc\xyz();

// You can use the alias concept with "as" and "use" keywords also.
	use abc\xyz as Demo;
	$obj1 = new demo();
}
