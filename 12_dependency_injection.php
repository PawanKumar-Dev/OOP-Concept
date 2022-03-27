<?php 
// Dependency injection is a design pattern in php which simply defines a way to code.
// Like other design pattern(like MVC) we try for DRY(Don't repeat yourself). In DI we use another library's code inside another library. This make coding more compact and save us valubale time.

// We create a "Logger" class which has a simple functionality to print messages that we can pass it to them.
// We create an object and we can call log function to print out msg.
class Logger {
	
	public function log($msg)
	{
		echo "Logging message: $msg";
	}
}

// $ajay = new Logger();
// $ajay->log("Working!!");


// Now imagine we have a bigger code where we want to use our logger functionality. Let it be "Userprofile" class. And it has bunch of functionality for its own use.
// Now we need that logger functionality in User function. We can simply make objects of logger class and call log() function.
// Now whenever we call any method of "Userprofile", we get logging msg.
// Since all functions of "Userprofile" are dependent on logger class. We can say that "Userprofile" has dependency of "Logger" class code.

// But we can see that $logger object is being created everytime which is redudant. Instead we use our construct function and create a sub-object of "Logger" class.
// We define a private variable and then sub-object "$this->logger". Use this sub-object to call the log() function.

// Now Depending injection is nothing more that we remove the object creation from inside the "Userprofile" class and pass that object as an argument instead.
// We must create the "Logger" class object outside now and then pass it as argument whenever we are going to create an object of "Userprofile" class.
// This way we make sure our dependency is injected. If not we get an fatal error.
class Userprofile
{
	private $logger;

	public function createUser()
	{
		// Create user Logic
		$this->logger->log("User Created!");
	}

	public function updateUser()
	{
		// Update user Logic
		$this->logger->log("User updated!");
	}

	public function deleteUser()
	{
		// Delete user Logic
		$this->logger->log("User deleted!");
	}

	public function __construct($logger)
	{
		$this->logger = $logger;
	}
}

$loggerObj = new Logger();

$jitu = new Userprofile($loggerObj);
$jitu->createUser();