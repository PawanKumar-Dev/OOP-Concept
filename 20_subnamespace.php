<?php
// Subnamespace is like a folder inside another folder. They can be accessed similarly to namespaces.
namespace Blueprint\BlueprintOfCars {

	class Car
	{
		
		public function __construct()
		{
			echo "Car class in Blueprint namespace";
		}
	}
}


namespace {

	class Car
	{
		
		function __construct()
		{
			echo "Car class in a nameless namespace";
		}
	}

	// Access subnamespace class is similar to accessing namespace.
	// You must pass the whole path exactly though.
	$maruti = new Blueprint\BlueprintOfCars\Car();
}