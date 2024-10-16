<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
$total = 0;

for ($i = 0; $i <= 30; $i++) {
    $total += $i; // Add the current number to the total
}

echo "Total: " . $total . "\n"; // Display the total
$rows = 5; // You can change this to generate more or fewer rows

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*'; // Print asterisks
    }
    echo "\n"; // Move to the next line after each row
}



echo '<table cellpadding="3px" cellspacing="0px" border="1">'; // Start table

for ($row = 1; $row <= 5; $row++) { // Loop for rows
    echo '<tr>'; // Start a new row
    for ($col = 1; $col <= 5; $col++) { // Loop for columns
        echo '<td>' . ($row * $col) . '</td>'; // Calculate product and display in cell
    }
    echo '</tr>'; // End row
}

echo '</table>'; // End table
function manipulateString($input) {
    echo "Original String: $input\n";
    echo "Uppercase: " . strtoupper($input) . "\n"; // Convert to uppercase
    echo "Lowercase: " . strtolower($input) . "\n"; // Convert to lowercase
    echo "First letter uppercase: " . ucfirst($input) . "\n"; // First letter to uppercase
    echo "First letter of each word capitalized: " . ucwords($input) . "\n"; // Capitalize each word
}

// Sample input
$inputString = "hello world";
manipulateString($inputString);



$numericString = '085119'; // Sample input

// Split the string into hours, minutes, and seconds
$formattedTime = substr($numericString, 0, 2) . ':' . substr($numericString, 2, 2) . ':' . substr($numericString, 4, 2);
echo "Formatted Time: $formattedTime\n";

$sentence = 'I am a full stack developer at orange coding academy'; // Sample input
$wordToFind = 'Orange'; // Sample word

// Check for the word in a case-insensitive manner
if (stripos($sentence, $wordToFind) !== false) {
    echo "Word Found!\n";
} else {
    echo "Word Not Found!\n";
}


$url = 'www.orange.com/index.php'; // Sample input
$fileName = basename($url); // Extract the file name
echo "File Name: $fileName\n";
$string = 'info@orange.com'; // Sample input
$lastThreeChars = substr($string, -3); // Extract last three characters
echo "Last Three Characters: $lastThreeChars\n";



function generateRandomPassword($length) {
    $characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; // Given string
    $password = '';
    $maxIndex = strlen($characters) - 1;

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, $maxIndex); // Generate random index
        $password .= $characters[$randomIndex]; // Append random character to password
    }

    return $password;
}

// Sample length for the password
$passwordLength = 10;
echo "Random Password: " . generateRandomPassword($passwordLength) . "\n";


function replaceFirstWord($sentence, $newWord) {
    // Find the position of the first space in the sentence
    $firstSpacePosition = strpos($sentence, ' ');
    
    // If there is no space, it means there is only one word
    if ($firstSpacePosition === false) {
        return $newWord; // Replace with the new word
    }

    // Replace the first word with the new word
    $modifiedSentence = $newWord . substr($sentence, $firstSpacePosition);

    return $modifiedSentence; // Return the modified sentence
}

// Sample input
$originalSentence = 'That new trainee is so genius.';
$newFirstWord = 'Our';

// Replace the first word and display the result
$result = replaceFirstWord($originalSentence, $newFirstWord);
echo $result . "\n";


function findLowestNonZero($array) {
    // Filter out the zeros from the array
    $nonZeroArray = array_filter($array, function($value) {
        return $value !== 0; // Only keep non-zero values
    });

    // Check if the filtered array is not empty
    if (empty($nonZeroArray)) {
        return null; // Return null if there are no non-zero integers
    }

    // Return the minimum value from the non-zero array
    return min($nonZeroArray);
}

// Sample input
$array1 = array(2, 0, 10, 12, 6);

// Find and display the lowest non-zero integer
$lowestNonZero = findLowestNonZero($array1);
echo $lowestNonZero . "\n";

function convertToLowerCase($array) {
    // Convert each string in the array to lowercase
    return array_map('strtolower', $array);
}

// Sample input
$colors = array("RED", "BLUE", "WHITE", "YELLOW");

// Convert and display the result
$lowercaseColors = convertToLowerCase($colors);
print_r($lowercaseColors);





    ?>
</body>
</html>