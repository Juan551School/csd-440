<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Array Example</title>
</head>
<body>

<h1>Customer List</h1>

<?php
// Juan Macias Vasquez
// Bellevue University 
// CSD440-H323 Server-Side Scripting (2265-DD)
// Jack Lusby
// April 16th, 2026
// Module 5 Assignment 

/**
 * Customer Array Program
 * This program creates an array of customers and demonstrates
 * searching and filtering using PHP array functions.
 */

// Create an array of customers (associative arrays)
$customers = [
    ["firstName" => "John", "lastName" => "Doe", "age" => 28, "phone" => "555-1234"],
    ["firstName" => "Jane", "lastName" => "Smith", "age" => 34, "phone" => "555-5678"],
    ["firstName" => "Clark", "lastName" => "Kent", "age" => 45, "phone" => "555-8765"],
    ["firstName" => "Yugi", "lastName" => "Moto", "age" => 22, "phone" => "555-4321"],
    ["firstName" => "Chris", "lastName" => "Brown", "age" => 31, "phone" => "555-2468"],
    ["firstName" => "Jack", "lastName" => "Sparrow", "age" => 29, "phone" => "555-1357"],
    ["firstName" => "Luke", "lastName" => "Skywalker", "age" => 40, "phone" => "555-9876"],
    ["firstName" => "Bruce", "lastName" => "Wayne", "age" => 27, "phone" => "555-6543"],
    ["firstName" => "Darth", "lastName" => "Vader", "age" => 36, "phone" => "555-1122"],
    ["firstName" => "Ash", "lastName" => "ketchum", "age" => 10, "phone" => "555-3344"]
];

// Function to display customer info
function displayCustomer($customer) {
    echo "Name: " . $customer["firstName"] . " " . $customer["lastName"] . "<br>";
    echo "Age: " . $customer["age"] . "<br>";
    echo "Phone: " . $customer["phone"] . "<br><br>";
}

// Display all customers
echo "<h2>All Customers</h2>";
foreach ($customers as $customer) {
    displayCustomer($customer);
}

// Example 1: To find the customers that are older than 30 (array_filter)
echo "<h2>Customers Older Than 30</h2>";
$olderCustomers = array_filter($customers, function($c) {
    return $c["age"] > 30;
});
foreach ($olderCustomers as $customer) {
    displayCustomer($customer);
}

// Example 2: Find customer by the first name (array_filter)
echo "<h2>Search for Customer Named 'John'</h2>";
$searchName = "John";
$foundCustomers = array_filter($customers, function($c) use ($searchName) {
    return $c["firstName"] === $searchName;
});
foreach ($foundCustomers as $customer) {
    displayCustomer($customer);
}

// Example 3: To extract all phone numbers (array_column)
echo "<h2>All Phone Numbers</h2>";
$phoneNumbers = array_column($customers, "phone");
foreach ($phoneNumbers as $phone) {
    echo $phone . "<br>";
}

// Example 4: Be able to sort customers by age (usort)
echo "<h2>Customers Sorted by Age</h2>";
usort($customers, function($a, $b) {
    return $a["age"] <=> $b["age"];
});
foreach ($customers as $customer) {
    displayCustomer($customer);
}

?>

</body>
</html>