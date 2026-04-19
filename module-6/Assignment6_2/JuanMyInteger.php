<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyInteger Class</title>
</head>
<body>

<?php
// Juan Macias Vasquez
// Bellevue University 
// CSD440-H323 Server-Side Scripting (2265-DD)
// Jack Lusby
// April 16th, 2026
// Module 6 Assignment 

/**
 * Class: JuanMyInteger
 * Description: Stores a single integer and provides methods
 * to determine if the number is even, odd, or prime.
 */
class JuanMyInteger {
    
    // Property
    private $number;

    /**
     * Constructor
     * @param int $num - initializes the integer value
     */
    public function __construct($num) {
        $this->number = $num;
    }

    /**
     * A Getter method
     * @return int
     */
    public function getNumber() {
        return $this->number;
    }

    /**
     * A Setter method
     * @param int $num
     */
    public function setNumber($num) {
        $this->number = $num;
    }

    /**
     * Check if number is even
     * @return bool
     */
    public function isEven() {
        return ($this->number % 2 == 0);
    }

    /**
     * Check if number is odd
     * @return bool
     */
    public function isOdd() {
        return ($this->number % 2 != 0);
    }

    /**
     * Check if number is prime
     * @return bool
     */
    public function isPrime() {
        if ($this->number <= 1) {
            return false;
        }

        for ($i = 2; $i <= sqrt($this->number); $i++) {
            if ($this->number % $i == 0) {
                return false;
            }
        }
        return true;
    }
}

// Create two instances (The Numbers to check)
$num1 = new JuanMyInteger(10);
$num2 = new JuanMyInteger(7);

// Function so that it display's the results
function displayResults($obj) {
    echo "<h3>Number: " . $obj->getNumber() . "</h3>";

    echo "Even? " . ($obj->isEven() ? "Yes" : "No") . "<br>";
    echo "Odd? " . ($obj->isOdd() ? "Yes" : "No") . "<br>";
    echo "Prime? " . ($obj->isPrime() ? "Yes" : "No") . "<br><br>";
}

// Display results for both objects
displayResults($num1);
displayResults($num2);

// Test setter (The new number to check)
echo "<h2>After changing the first number:</h2>";
$num1->setNumber(13);
displayResults($num1);

?>

</body>
</html>