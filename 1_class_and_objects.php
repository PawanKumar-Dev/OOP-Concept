<?php 
// In real world we can define anything as an object like a table, person, remote etc.
// While Class can be defined as blueprint by which a object can identified and classfied into a category.
// Example: we can say that apple, grapes, banana all are objects. They have defined structure and have a certain behvaior. In grapes behavaior is it tastes acidic. Banana tastes sweet.
// But we can identify them as common type as fruits. So fruits in this case could be their "Class".

// In programming languages we know that: It is just naming convention.
// Structure, variables, features --- all are the same.
// Behaviour, Methods, Functions --- all are same as well.

class AC {
	public $model = "Blue Star";
	public $speed = 16;

	public function tempUp()
	{
		return $this->speed+1;
	}

	public function tempDown()
	{
		return $this->speed--;
	}

	public function showModel()
	{
		return $this->model;
	}
}

$ac1 = new AC;

echo $ac1->showModel();

echo "<br>";

echo $ac1->tempUp();

// As we can see we must have an object to access properties and methods of our class.
// In Non-static properties and methods case, an object is compulsory.