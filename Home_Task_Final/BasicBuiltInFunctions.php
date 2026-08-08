<?php

// ======================================================
// 1. strlen()
// Returns the length of a string.
// ======================================================

$text = "Hello World";
echo strlen($text);
echo "<br><br>";


// ======================================================
// 2. str_word_count()
// Counts the number of words in a string.
// ======================================================

$text = "PHP is easy to learn";
echo str_word_count($text);
echo "<br><br>";


// ======================================================
// 3. str_contains()
// Checks whether a string contains another string.
// Returns true or false.
// ======================================================

$text = "I love PHP";

if (str_contains($text, "PHP")) {
    echo "PHP is found";
}
echo "<br><br>";


// ======================================================
// 4. strpos()
// Finds the position of the first occurrence of a word/character.
// ======================================================

$text = "Hello PHP";
echo strpos($text, "PHP");
echo "<br><br>";


// ======================================================
// 5. strtoupper()
// Converts a string to uppercase.
// ======================================================

$text = "hello world";
echo strtoupper($text);
echo "<br><br>";


// ======================================================
// 6. strtolower()
// Converts a string to lowercase.
// ======================================================

$text = "HELLO WORLD";
echo strtolower($text);
echo "<br><br>";


// ======================================================
// 7. str_replace()
// Replaces a word or character with another.
// ======================================================

$text = "I like Java";
echo str_replace("Java", "PHP", $text);
echo "<br><br>";


// ======================================================
// 8. strrev()
// Reverses a string.
// ======================================================

$text = "Hello";
echo strrev($text);
echo "<br><br>";


// ======================================================
// 9. trim()
// Removes whitespace from the beginning and end of a string.
// ======================================================

$text = "   Hello World   ";
echo trim($text);
echo "<br><br>";


// ======================================================
// 10. explode()
// Splits a string into an array using a separator.
// ======================================================

$text = "Apple,Banana,Mango";
$fruits = explode(",", $text);

print_r($fruits);
echo "<br><br>";


// ======================================================
// 11. implode()
// Joins array elements into one string.
// ======================================================

$fruits = ["Apple", "Banana", "Mango"];

echo implode(", ", $fruits);
echo "<br><br>";


// ======================================================
// 12. substr()
// Returns a part of a string.
// ======================================================

$text = "Hello World";

echo substr($text, 0, 5);
echo "<br><br>";


// ======================================================
// 13. is_int()
// Checks whether a value is an integer.
// ======================================================

$number = 25;

if (is_int($number)) {
    echo "The value is an integer";
}
echo "<br><br>";


// ======================================================
// 14. is_float()
// Checks whether a value is a floating-point number.
// ======================================================

$number = 10.5;

if (is_float($number)) {
    echo "The value is a float";
}
echo "<br><br>";


// ======================================================
// 15. is_nan()
// Checks whether a value is Not-a-Number (NaN).
// ======================================================

$value = NAN;

if (is_nan($value)) {
    echo "The value is NaN";
}
echo "<br><br>";


// ======================================================
// 16. is_numeric()
// Checks whether a value is a number or numeric string.
// ======================================================

$value = "123";

if (is_numeric($value)) {
    echo "The value is numeric";
}
echo "<br><br>";


// ======================================================
// 17. round()
// Rounds a number to the nearest integer.
// ======================================================

$number = 5.7;

echo round($number);
echo "<br><br>";


// ======================================================
// 18. define()
// Defines a constant.
// ======================================================

define("COLLEGE", "AIUB");

echo COLLEGE;
echo "<br><br>";


// ======================================================
// 19. date()
// Formats the current date/time.
// ======================================================

echo date("Y-m-d");
echo "<br><br>";


// ======================================================
// 20. strtotime()
// Converts a date/time string into a Unix timestamp.
// ======================================================

$date = strtotime("tomorrow");

echo date("Y-m-d", $date);
echo "<br><br>";


// ======================================================
// 21. time()
// Returns the current Unix timestamp.
// ======================================================

echo time();
echo "<br><br>";


// ======================================================
// 22. date_default_timezone_set()
// Sets the default timezone for date/time functions.
// ======================================================

date_default_timezone_set("Asia/Dhaka");

echo date("Y-m-d H:i:s");
echo "<br><br>";


// ======================================================
// 23. date_default_timezone_get()
// Gets the currently selected default timezone.
// ======================================================

echo date_default_timezone_get();
echo "<br><br>";


// ======================================================
// 24. include
// Includes another PHP file in the current PHP file.
// ======================================================

// include "header.php";


// ======================================================
// 25. require
// Includes another PHP file.
// If the file is missing, require causes a fatal error.
// ======================================================

// require "config.php";


// ======================================================
// 26. json_encode()
// Converts a PHP array/object into a JSON string.
// ======================================================

$data = [
    "name" => "Rahim",
    "age" => 22
];

$json = json_encode($data);

echo $json;
echo "<br><br>";


// ======================================================
// 27. json_decode()
// Converts a JSON string into a PHP object/array.
// ======================================================

$json = '{"name":"Rahim","age":22}';

$data = json_decode($json);

echo $data->name;
echo "<br><br>";


// ======================================================
// 28. array()
// Creates an array.
// ======================================================

$fruits = array("Apple", "Banana", "Mango");

print_r($fruits);
echo "<br><br>";


// ======================================================
// 29. array_keys()
// Returns all the keys of an array.
// ======================================================

$student = [
    "name" => "Rahim",
    "age" => 22,
    "department" => "CSE"
];

print_r(array_keys($student));
echo "<br><br>";


// ======================================================
// 30. array_merge()
// Combines two or more arrays.
// ======================================================

$array1 = ["Apple", "Banana"];
$array2 = ["Mango", "Orange"];

$result = array_merge($array1, $array2);

print_r($result);
echo "<br><br>";


// ======================================================
// 31. array_push()
// Adds one or more elements to the end of an array.
// ======================================================

$fruits = ["Apple", "Banana"];

array_push($fruits, "Mango");

print_r($fruits);
echo "<br><br>";


// ======================================================
// 32. array_reverse()
// Reverses the order of elements in an array.
// ======================================================

$numbers = [1, 2, 3, 4, 5];

print_r(array_reverse($numbers));
echo "<br><br>";


// ======================================================
// 33. sizeof()
// Returns the number of elements in an array.
// sizeof() is an alias of count().
// ======================================================

$fruits = ["Apple", "Banana", "Mango"];

echo sizeof($fruits);
echo "<br><br>";


// ======================================================
// 34. count()
// Counts the number of elements in an array.
// ======================================================

$numbers = [10, 20, 30, 40];

echo count($numbers);
echo "<br><br>";


// ======================================================
// 35. sort()
// Sorts an array in ascending order.
// ======================================================

$numbers = [5, 2, 8, 1, 3];

sort($numbers);

print_r($numbers);
echo "<br><br>";

?>