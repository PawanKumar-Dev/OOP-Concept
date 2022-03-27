<?php 
// Late static binding is concept introduced in PHP 5.4 later version.
// To understand this concept we must first clear that PHP is an interpreted programming language. Still there are two different process involved: compilation and interpretation.

// In compile phase, syntax errors are detected and then thrown to user. But if there are no compilation error. We get to interpretation phase.
// In interpretation phase, logical errors are detected and then thrown. Again if no error finally result is shown.

// In early static binding, variable value is assigned in compilation phase.

// In late static binding, variable value is assigned in interpretation phase.

// In below class we made a static variable and then assigned it the function select() and insert() function.

class DBdemo {
	protected static $table = "demoTable";

	public function select()
	{
		return "SELECT * FROM ". static::$table;
	}

	public function insert()
	{
		return "INSERT INTO ". static::$table;
	}
}


// But what if we extend this class to another class and want to use these methods.
// We can define a new table name and try to use the previous defined functions. And we get the previous table name whenever running functions.

// This problem can be solved by using late static binding. We simply replace "self" keyword with "static". This enable the varibale value to be assigned on runtime.


class Student extends DBdemo {
	protected static $table = "Student";
}

class Feedback extends DBdemo
{
	protected static $table = "Feedback";
}


$obj1 = new DBdemo();
echo $obj1->select();

echo "<br>";
echo $obj1->insert();

echo "<br>";
$obj2 = new Student();
echo $obj2->select();


echo "<br>";
$obj3 = new Feedback();
echo $obj3->insert();