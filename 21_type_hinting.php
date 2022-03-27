<?php
// Unlike many other languages like Java, C++, PHP offers limited type hinting support becoz of being loosly scripted server-side language.
// type hinting work with arguments that are passed inside a functions.
// If we type-hint the argument, it make the error detection in code easier. And force developer to practise strict rules of coding.

// In below function, we expect our argument to be array with key=>value pairs. but if somehow wrong data is sent our code will give error while compling.
// But if we type hint this to be array(which is possible with PHP) we get fatal error informing developer that wrong type of arugement is passed.

function person(array $names)
{
	echo "<table border='2'>";
	foreach ($names as $key => $value) {
		echo "<tr>".
				"<td>$key</td>".
				"<td>$value</td>".
			"</tr>";
	}
	echo "</table>";
}

$new_name = [ "first"=>"pawan", "last"=>"kumar" ];

$wrong_name = "Raju";

person($new_name);