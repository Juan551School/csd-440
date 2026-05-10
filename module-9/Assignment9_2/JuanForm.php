<?php
// JuanCreateTable.php
// Module 9 Assignment Part 2 of 3
// Main Purpose is to make forms to put into the table

// The login information to the database 
$servername = "localhost";
$username = "student1";
$password = "pass";
$dbname = "baseball_01";

$conn = new mysqli($servername, $username, $password, $dbname);

$message = "";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data when form is submitted
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $team = $_POST['team'];
    $position = $_POST['position'];
    $avg = $_POST['avg'];
    $home_runs = $_POST['home_runs'];

    // FIXED: correct table + correct columns
    $sql = "INSERT INTO players (name, team, position, batting_avg, home_runs)
            VALUES ('$name', '$team', '$position', '$avg', '$home_runs')";

    if ($conn->query($sql) === TRUE) {
        $message = "Player added successfully!";
    } else {
        $message = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Baseball Player</title>
</head>
<body>

<h1>Add Baseball Player</h1>

<!-- Success/Error Message -->
<p><?php echo $message; ?></p>

<!-- Player Form -->
<form method="post">
    Player Name: <br>
    <input type="text" name="name" required><br><br>

    Team: <br>
    <input type="text" name="team"><br><br>

    Position: <br>
    <input type="text" name="position"><br><br>

    Batting Average: <br>
    <input type="text" name="avg"><br><br>

    Home Runs: <br>
    <input type="number" name="home_runs"><br><br>

    <input type="submit" name="submit" value="Add Player">
</form>

<br>

<!-- Navigation -->
<a href="JuanIndex.php">Back to Home</a>

</body>
</html>