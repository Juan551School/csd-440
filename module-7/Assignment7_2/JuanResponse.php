<?php
/*
    Juan Macias Vasquez
    Bellevue University 
    CSD440-H323 Server-Side Scripting (2265-DD)
    Jack Lusby
    April 26th, 2026
    Module 7 Assignment 
*/

// Store validation errors
$errors = [];

// A Clean input function
function clean_input($data) {
    return htmlspecialchars(trim($data));
}

/* ---------------------------
   The VALIDATION SECTION
----------------------------*/

// First Name
if (empty($_POST['firstName'])) {
    $errors[] = "First Name is required.";
} else {
    $firstName = clean_input($_POST['firstName']);
}

// Last Name
if (empty($_POST['lastName'])) {
    $errors[] = "Last Name is required.";
} else {
    $lastName = clean_input($_POST['lastName']);
}

// Email
if (empty($_POST['email'])) {
    $errors[] = "Email is required.";
} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
} else {
    $email = clean_input($_POST['email']);
}

// Age
if (empty($_POST['age'])) {
    $errors[] = "Age is required.";
} elseif (!is_numeric($_POST['age'])) {
    $errors[] = "Age must be a number.";
} else {
    $age = clean_input($_POST['age']);
}

// Date of Birth
if (empty($_POST['dob'])) {
    $errors[] = "Date of Birth is required.";
} else {
    $dob = clean_input($_POST['dob']);
}

// Eye Color
if (empty($_POST['eyeColor'])) {
    $errors[] = "Eye Color is required.";
} else {
    $eyeColor = clean_input($_POST['eyeColor']);
}

// Terms checkbox
if (empty($_POST['terms'])) {
    $errors[] = "You must agree to the terms.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Response</title>
</head>
<body>

<h2>Form Submission Result</h2>

<?php
/* ---------------------------
   The OUTPUT SECTION
----------------------------*/

if (!empty($errors)) {

    // Display errors
    echo "<h3 style='color:red;'>Errors Found:</h3>";
    echo "<ul>";
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul>";

    echo "<a href='YourFirstNameForm.html'>Go Back to Form</a>";

} else {

    // Display success output
    echo "<h3 style='color:green;'>Submission Successful!</h3>";

    echo "<p><strong>First Name:</strong> $firstName</p>";
    echo "<p><strong>Last Name:</strong> $lastName</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>Eye Color:</strong> $eyeColor</p>";
    echo "<p><strong>Terms Accepted:</strong> Yes</p>";
}
?>

</body>
</html>