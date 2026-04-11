<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Palindrome Checker</title>
</head>
<body>

<h2>Palindrome Checker Program</h2>

<?php
// Juan Macias Vasquez
// Bellevue University 
// CSD440-H323 Server-Side Scripting (2265-DD)
// Jack Lusby
// April 9th, 2026
// Module 4 Assignment 

// Function to check if a string is a palindrome
function isPalindrome($string) {
    // Convert string to lowercase and remove spaces
    $cleanString = strtolower(str_replace(' ', '', $string));

    // Reverse the string
    $reversedString = strrev($cleanString);

    // Check if original and reversed are the same
    if ($cleanString == $reversedString) {
        return true;
    } else {
        return false;
    }
}

// Array of test strings (3 palindromes, 3 not)
$testStrings = array(
    "level",      // palindrome
    "refer",        // palindrome
    "stats",        // palindrome
    "game",        // not palindrome
    "world",        // not palindrome
    "php"           // not palindrome
);

// Loop through each string and test it
foreach ($testStrings as $string) {
    $reversed = strrev($string);

    echo "<p>";
    echo "Original String: " . $string . "<br>";
    echo "Reversed String: " . $reversed . "<br>";

    // Call the function and display result
    if (isPalindrome($string)) {
        echo "Result: This IS a palindrome.";
    } else {
        echo "Result: This is NOT a palindrome.";
    }

    echo "</p><hr>";
}
?>

</body>
</html>