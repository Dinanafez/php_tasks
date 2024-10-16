<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$colors = array('white', 'green', 'red');

echo "<ul>";
foreach ($colors as $color) {
    echo "<li>$color</li>";
}
echo "</ul>";
///////////////////////////////////////

// Define the array
$cities = array(
    "Italy" => "Rome", 
    "Luxembourg" => "Luxembourg", 
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen", 
    "Finland" => "Helsinki", 
    "France" => "Paris", 
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana", 
    "Germany" => "Berlin", 
    "Greece" => "Athens", 
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam", 
    "Portugal" => "Lisbon", 
    "Spain" => "Madrid"
);

// Sort the array by the capital (value)
asort($cities);

// Display the capital and country
foreach ($cities as $country => $capital) {
    echo "The capital of $country is $capital<br>";
}
//////////////////////////////////////
//////////////////////////////////////////////////////
$color = array(4 => 'white', 6 => 'green', 11 => 'red');

// To get the first element of the array
echo reset($color);
$input = array(1, 2, 3, 4, 5);

// Location where new item should be inserted
$location = 3; // Remember, arrays are 0-indexed in PHP, so 4th position is index 3

// New item to be inserted
$newItem = '$';

// Insert the new item at the specified location
array_splice($input, $location, 0, $newItem);

// Display the updated array
foreach ($input as $item) {
    echo $item . " ";
}
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

// Sort the array by key in ascending order
ksort($fruits);

// Display the sorted array
foreach ($fruits as $key => $value) {
    echo "$key = $value\n";}

    // Input temperatures
    $temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
    
    // Calculate average temperature
    $average = array_sum($temperatures) / count($temperatures);
    echo "Average Temperature is: " . round($average, 1) . "\n";
    
    // Sort temperatures in ascending order
    sort($temperatures);
    
    // Get the five lowest temperatures
    $lowest = array_slice($temperatures, 0, 5);
    echo "List of five lowest temperatures: " . implode(", ", $lowest) . "\n";
    
    // Get the five highest temperatures
    $highest = array_slice($temperatures, -5);
    echo "List of five highest temperatures: " . implode(", ", $highest) . "\n";


// Input temperatures
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

// Calculate average temperature
$average = array_sum($temperatures) / count($temperatures);
echo "Average Temperature is: " . round($average, 1) . "\n";

// Sort temperatures in ascending order
sort($temperatures);

// Get the five lowest temperatures
$lowest = array_slice($temperatures, 0, 5);
echo "List of five lowest temperatures: " . implode(", ", $lowest) . "\n";

// Get the five highest temperatures
$highest = array_slice($temperatures, -5);
echo "List of five highest temperatures: " . implode(", ", $highest) . "\n";
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

// Merge the arrays
$result = array_merge($array1, $array2);

// Display the merged array
print_r($result);
function convertToUpperCase($array) {
  return array_map('strtoupper', $array);
}

// Sample input array
$colors = array("red", "blue", "white", "yellow");

// Convert to uppercase
$uppercaseColors = convertToUpperCase($colors);

// Display the modified array
print_r($uppercaseColors);
function isPrime($number) {
  if ($number <= 1) return false;
  for ($i = 2; $i <= sqrt($number); $i++) {
      if ($number % $i == 0) return false;
  }
  return true;
}

// Sample input
$number = 3;

if (isPrime($number)) {
  echo "$number is a prime number\n";
} else {
  echo "$number is not a prime number\n";
}
function reverseString($str) {
  return strrev($str);
}

// Sample input
$string = "remove";
echo reverseString($string) . "\n";
function swap(&$x, &$y) {
  $temp = $x;
  $x = $y;
  $y = $temp;
}

// Sample input
$x = 12;
$y = 10;

swap($x, $y);
echo "x = $x, y = $y\n";
function isArmstrong($number) {
  $sum = 0;
  $temp = $number;
  while ($temp != 0) {
      $digit = $temp % 10;
      $sum += pow($digit, 3);
      $temp = (int)($temp / 10);
  }
  return $sum == $number;
}

// Sample input
$number = 407;

if (isArmstrong($number)) {
  echo "$number is an Armstrong number\n";
} else {
  echo "$number is not an Armstrong number\n";
}

function isPalindrome($str) {
  // Remove non-alphabetic characters and make the string lowercase
  $cleaned = preg_replace("/[^A-Za-z]/", '', strtolower($str));
  return $cleaned == strrev($cleaned);
}

// Sample input
$string = "Eva, can I see bees in a cave?";

if (isPalindrome($string)) {
  echo "Yes, it is a palindrome\n";
} else {
  echo "No, it is not a palindrome\n";
}
function removeDuplicates($array) {
  return array_values(array_unique($array));
}

// Sample input
$array1 = array(2, 4, 7, 4, 8, 4);
$uniqueArray = removeDuplicates($array1);

// Display the result
print_r($uniqueArray);



function checkSum($firstInteger, $secondInteger) {
  $sum = $firstInteger + $secondInteger;
  return $sum == 30 ? $sum : 'false';
}

// Sample input
$firstInteger = 10;
$secondInteger = 10;

echo checkSum($firstInteger, $secondInteger) . "\n";
function isMultipleOfThree($number) {
  return $number % 3 == 0 ? 'true' : 'false';
}

// Sample input
$number = 20;

echo isMultipleOfThree($number) . "\n";
function isInRange($number) {
  return ($number >= 20 && $number <= 50) ? 'true' : 'false';
}

// Sample input
$number = 50;

echo isInRange($number) . "\n";
function findLargest($a, $b, $c) {
  return max($a, $b, $c);
}

// Sample input
$a = 1;
$b = 5;
$c = 9;

echo findLargest($a, $b, $c) . "\n";
function calculateElectricityBill($units) {
  $bill = 0;

  if ($units <= 50) {
      $bill = $units * 2.50;
  } elseif ($units <= 150) {
      $bill = (50 * 2.50) + (($units - 50) * 5.00);
  } elseif ($units <= 250) {
      $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
  } else {
      $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
  }

  return $bill;
}

// Sample input
$units = 280;

echo "Total Electricity Bill: " . calculateElectricityBill($units) . " JOD\n";

function calculator($num1, $num2, $operation) {
  switch ($operation) {
      case 'add':
          return $num1 + $num2;
      case 'subtract':
          return $num1 - $num2;
      case 'multiply':
          return $num1 * $num2;
      case 'divide':
          return $num2 != 0 ? $num1 / $num2 : 'Division by zero not allowed';
      default:
          return 'Invalid operation';
  }
}

// Sample inputs
$num1 = 10;
$num2 = 5;

echo "Addition: " . calculator($num1, $num2, 'add') . "\n";
echo "Subtraction: " . calculator($num1, $num2, 'subtract') . "\n";
echo "Multiplication: " . calculator($num1, $num2, 'multiply') . "\n";
echo "Division: " . calculator($num1, $num2, 'divide') . "\n";
function checkEligibilityToVote($age) {
  return $age >= 18 ? 'is eligible to vote' : 'is not eligible to vote';
}

// Sample input
$age = 15;

echo $age . " " . checkEligibilityToVote($age) . "\n";
function checkNumberSign($number) {
  if ($number > 0) {
      return 'Positive';
  } elseif ($number < 0) {
      return 'Negative';
  } else {
      return 'Zero';
  }
}

// Sample input
$number = -60;

echo checkNumberSign($number) . "\n";
function calculateGrade($scores) {
  $average = array_sum($scores) / count($scores);

  if ($average >= 90) {
      return 'A';
  } elseif ($average >= 80) {
      return 'B';
  } elseif ($average >= 70) {
      return 'C';
  } elseif ($average >= 60) {
      return 'D';
  } else {
      return 'F';
  }
}





























































?>

 

  





</body>
</html>
