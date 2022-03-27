<?php
// As we see that Base Employee is the common class having constructor and properties. But there are only two types of employee at company. So making object of base employee should be restricated and here is when we use abstract class concept.
// Abstract class is a class which facilitate working of other two classes but it is working in background. We don't need its own object.

class Base_employee
{
	protected $firstname;
	protected $lastname;

	public function getFullName()
	{
		return $this->firstname. " ". $this->lastname;
	}

	public function __construct($f, $l)
	{
		$this->firstname = $f;
		$this->lastname = $l;
	}
}

class Regular_employee extends Base_employee
{
	protected $annual_salary;

	public function getMonthlySalary()
	{
		return $this->annual_salary/12;
	}
}

class Parttime_employee extends Base_employee
{
	protected $hourrate;
	protected $totalHours;

	public function getMonthlySalary()
	{
		return $this->hourrate * $this->totalHours;
	}
}


$raja = new Regular_employee("Raja", "Kumar");
echo $raja->getFullName();


$jake = new Parttime_employee("Jake", "Smith");
echo $jake->getFullName();
