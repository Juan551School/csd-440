<?php
/*
    Juan Macias Vasquez
    Bellevue University 
    CSD440-H323 Server-Side Scripting (2265-DD)
    Jack Lusby
    April 26th, 2026
    Module 10 Assignment 
    JuanJSON.php
*/

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect the form data (IN this case Full Name and contact infomration plus Favorite Porgramming langugae) and also remove extra spaces
    $firstName = trim($_POST["firstName"]);
    $lastName = trim($_POST["lastName"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $city = trim($_POST["city"]);
    $state = trim($_POST["state"]);
    $zipCode = trim($_POST["zipCode"]);
    $favoriteLanguage = trim($_POST["favoriteLanguage"]);

    // Check for empty fields
    if (
        empty($firstName) || empty($lastName) ||
        empty($email) || empty($phone) ||
        empty($city) || empty($state) ||
        empty($zipCode) || empty($favoriteLanguage)
    ) {

        $errorMessage = "Error: All fields are required.";

    } else {

        // Create an associative array
        $studentData = array(
            "First Name" => $firstName,
            "Last Name" => $lastName,
            "Email" => $email,
            "Phone" => $phone,
            "City" => $city,
            "State" => $state,
            "Zip Code" => $zipCode,
            "Favorite Programming Language" => $favoriteLanguage
        );

        // Convert array to JSON format
        $jsonData = json_encode($studentData, JSON_PRETTY_PRINT);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JSON Form Assignment</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        form {
            background-color: white;
            padding: 20px;
            width: 400px;
            border-radius: 10px;
            box-shadow: 0px 0px 5px gray;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .output {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
            width: 500px;
            border-radius: 10px;
            box-shadow: 0px 0px 5px gray;
        }

        .error {
            color: red;
            font-weight: bold;
        }

        pre {
            background-color: #efefef;
            padding: 15px;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<h1>PHP JSON Form Assignment</h1>

<form method="post" action="">
    
    <label>First Name:</label>
    <input type="text" name="firstName">

    <label>Last Name:</label>
    <input type="text" name="lastName">

    <label>Email:</label>
    <input type="email" name="email">

    <label>Phone Number:</label>
    <input type="text" name="phone">

    <label>City:</label>
    <input type="text" name="city">

    <label>State:</label>
    <input type="text" name="state">

    <label>Zip Code:</label>
    <input type="text" name="zipCode">

    <label>Favorite Programming Language:</label>
    <input type="text" name="favoriteLanguage">

    <input type="submit" value="Submit Form">

</form>

<?php
// Display error message if fields are missing
if (isset($errorMessage)) {
    echo "<div class='output'>";
    echo "<p class='error'>$errorMessage</p>";
    echo "</div>";
}

// Display JSON output if successful
if (isset($jsonData)) {
    echo "<div class='output'>";
    echo "<h2>JSON Encoded Data</h2>";
    echo "<pre>$jsonData</pre>";
    echo "</div>";
}
?>

</body>
</html>