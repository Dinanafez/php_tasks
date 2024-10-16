<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    function convertToLowerCase($array) {
        // Convert each string in the array to lowercase
        return array_map('strtolower', $array);
    }
    
    // Sample input
    $colors = array("RED", "BLUE", "WHITE", "YELLOW");
    
    // Convert and display the result
    $lowercaseColors = convertToLowerCase($colors);
    print_r($lowercaseColors);





    echo "Numbers between 200 and 250 that are divisible by 4: ";
$numbers = [];

for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 === 0) {
        $numbers[] = $i; // Add to array if divisible by 4
    }
}

// Display the numbers as a comma-separated string
echo implode(',', $numbers) . "\n";
function getStringLengths($array) {
    // Get the lengths of the strings
    $lengths = array_map('strlen', $array);
    
    // Calculate the shortest and longest lengths
    $shortestLength = min($lengths);
    $longestLength = max($lengths);
    
    return array($shortestLength, $longestLength);
}

// Sample input
$words = array("abcd", "abc", "de", "hjjj", "g", "wer");

// Get and display the shortest and longest lengths
list($shortest, $longest) = getStringLengths($words);
echo "The shortest array length is $shortest. The longest array length is $longest.\n";
function generateUniqueRandomNumbers($min, $max, $count) {
    // Ensure the range is valid and count is not more than the range
    if ($max - $min + 1 < $count) {
        return []; // Not enough numbers in range
    }
    
    // Generate unique random numbers
    $numbers = [];
    while (count($numbers) < $count) {
        $randomNumber = rand($min, $max);
        if (!in_array($randomNumber, $numbers)) {
            $numbers[] = $randomNumber; // Add unique number to the array
        }
    }
    
    return $numbers;
}

// Sample input range
$min = 11;
$max = 20;
$count = 10;

// Generate and display the unique random numbers
$uniqueRandomNumbers = generateUniqueRandomNumbers($min, $max, $count);
echo implode(' ', $uniqueRandomNumbers) . "\n";




function isLeapYear($year) {
    // Check if the year is a leap year
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return "This year is a leap year.";
    } else {
        return "This year is not a leap year.";
    }
}

// Sample input
$inputYear = 2013;

// Display the result
echo isLeapYear($inputYear) . "\n";


function checkSeason($temperature) {
    // Check if the temperature indicates winter or summer
    if ($temperature < 20) {
        return "It is wintertime!";
    } else {
        return "It is summertime!";
    }
}

// Sample input
$inputTemperature = 27;

// Display the result
echo checkSeason($inputTemperature) . "\n";





function calculateSum($firstInteger, $secondInteger) {
    // Calculate the sum or triple the sum if they are the same
    if ($firstInteger === $secondInteger) {
        $result = ($firstInteger + $secondInteger) * 3; // Triple their sum
    } else {
        $result = $firstInteger + $secondInteger; // Regular sum
    }
    
    return "The result is: $result";
}

// Sample input
$inputIntegers = [2, 2]; // firstInteger => 2 , secondInteger => 2

// Display the result
echo calculateSum($inputIntegers[0], $inputIntegers[1]) . "\n";


function printPattern($n) {
    // Print the upper part of the pattern
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo chr(64 + $j) . " "; // ASCII value for 'A' is 65
        }
        echo "\n"; // New line after each row
    }

    // Print the lower part of the pattern
    for ($i = $n - 1; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo chr(64 + $j) . " "; // ASCII value for 'A' is 65
        }
        echo "\n"; // New line after each row
    }
}

// Sample input
$n = 5; // Number of lines for the upper part
printPattern($n);

function printFloydTriangle($n) {
    $num = 1; // Starting number
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $num . " ";
            $num++;
        }
        echo "\n"; // New line after each row
    }
}

// Sample input
$n = 5; // Number of lines
printFloydTriangle($n);



function fizzBuzz() {
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz ";
        } elseif ($i % 3 == 0) {
            echo "Fizz ";
        } elseif ($i % 5 == 0) {
            echo "Buzz ";
        } else {
            echo $i . " ";
        }
    }
    echo "\n";
}

// Run the FizzBuzz program
fizzBuzz();
function countCharacterC($text) {
    // Count the occurrences of 'c' or 'C'
    $count = substr_count(strtolower($text), 'c');
    return $count;
}

// Sample input
$text = "Orange Coding Academy";
$characterCount = countCharacterC($text);
echo "The letter 'c' appears $characterCount times.\n";
function printFibonacci($n) {
    $fibonacci = [];
    $fibonacci[0] = 0; // First Fibonacci number
    $fibonacci[1] = 1; // Second Fibonacci number

    // Generate Fibonacci sequence
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    // Print the sequence
    echo implode(", ", $fibonacci) . "\n";
}

// Sample input
$n = 10; // Number of Fibonacci numbers to generate
printFibonacci($n);


function findFirstDifference($str1, $str2) {
    $length = min(strlen($str1), strlen($str2)); // Compare only up to the length of the shorter string
    
    for ($i = 0; $i < $length; $i++) {
        if ($str1[$i] !== $str2[$i]) {
            echo "First difference between two strings at position " . ($i + 1) . ": \"" . $str1[$i] . "\" vs \"" . $str2[$i] . "\"\n";
            return;
        }
    }
    
    echo "No differences found in the strings.\n";
}

// Sample input
$string1 = 'dragonball';
$string2 = 'dragonboll';
findFirstDifference($string1, $string2);

$string = "Twinkle, twinkle, little star.";
$array = str_split($string, 10); // Split the string into an array of 10 character segments
var_dump($array);


function nextLetter($char) {
    if ($char === 'z') {
        return 'a';
    } elseif ($char === 'Z') {
        return 'A';
    } else {
        return chr(ord($char) + 1);
    }
}

// Sample input
$character1 = 'a';
$character2 = 'z';

echo nextLetter($character1) . "\n"; // Expected Output: 'b'
echo nextLetter($character2) . "\n"; // Expected Output: 'a'


function insertString($original, $insert, $position) {
    return substr($original, 0, $position) . $insert . substr($original, $position);
}

// Sample input
$originalString = 'The brown fox';
$insertString = ' quick';
$position = 4; // Position to insert after 'The'

$newString = insertString($originalString, $insertString, $position);
echo $newString . "\n"; // Expected Output: 'The quick brown fox'

function getFirstWord($sentence) {
    return explode(' ', $sentence)[0];
}

// Sample input
$originalString = 'The quick brown fox';
$firstWord = getFirstWord($originalString);
echo $firstWord . "\n"; // Expected Output: 'The'



function removeZeroes($number) {
    return ltrim($number, '0');
}

// Sample input
$originalString = '0000657022.24';
$cleanedString = removeZeroes($originalString);
echo $cleanedString . "\n"; // Expected Output: '65722.24'

function removePartOfString($original, $partToRemove) {
    return str_replace($partToRemove, '', $original);
}

// Sample input
$originalString = 'The quick brown fox jumps over the lazy dog';
$modifiedString = removePartOfString($originalString, 'fox');
echo trim($modifiedString) . "\n"; // Expected Output: 'The quick brown jumps over the lazy dog'

function removeTrailingDashes($string) {
    return rtrim($string, '-');
}

// Sample input
$originalString = 'The quick brown fox jumps over the lazy dog---';
$cleanedString = removeTrailingDashes($originalString);
echo $cleanedString . "\n";
    
    ?>
</body>
</html>s