<?php
// This is an example PHP script to demonstrate some basic functionalities.
// You can replace the content below with your own code.

// Example 1: Simple echo statement
echo "Hello, World!";

// Example 2: Input/output operations (like file reading and writing)
file_put_contents('output.txt', 'Here is a sample output.');

// Example 3: Array manipulation
$students = array(1, 2, 3);
$average = array_sum($students) / count($students);

echo "The average of the students' ages is: " . $average;

// Example 4: Looping through an array (for loop)
foreach ($students as $key => $value) {
    echo "Student number $key has age: $value\n";
}
