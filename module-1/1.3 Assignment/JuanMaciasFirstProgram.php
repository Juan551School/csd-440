// Module 1_3 Assignment 
// Juan Macias Vasquez
// Bellevue University 
// CSD440-H323 Server-Side Scripting (2265-DD)
// Jack Lusby
// March 27th, 2026

<!DOCTYPE html>
<html>
<head>
    <title>First PHP Program</title>
</head>
<body>

<h1>Welcome to My First PHP Program</h1>

<?php
// This is the first PHP code snippet
// It shows a simple message with my name 
echo "<p>Hello, my name is Juan Carlos Macias Vasquez</p>";
?>

<?php
// This is the second PHP code snippet
// It displays the current date and time
date_default_timezone_set("America/Denver");
echo "<p>Today's date is: " . date("Y-m-d") . "</p>";
echo "<p>The Current time is: " . date("h:i:s A") . "</p>";
?>

</body>
</html>