<?php
// YourNamePopulateTable.php
// Module 8 Assignment Part 3 of 4
// Purpose is to insert the data into players table

$servername = "localhost";
$username = "student1";
$password = "pass";
$dbname = "baseball_01";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert multiple rows
// I Dont really know anything about baseball so I just googled for this random information 
$sql = "INSERT INTO players (name, team, position, batting_avg, home_runs)
VALUES
('Mike Trout', 'Angels', 'CF', 0.301, 350),
('Aaron Judge', 'Yankees', 'RF', 0.287, 260),
('Mookie Betts', 'Dodgers', 'RF', 0.295, 240),
('Freddie Freeman', 'Dodgers', '1B', 0.300, 320),
('Shohei Ohtani', 'Dodgers', 'DH', 0.310, 200)";

if ($conn->query($sql) === TRUE) {
    echo "Records inserted successfully!";
} else {
    echo "Error inserting data: " . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Populate Table</title>
</head>
<body>
<h2>Populate Table Page</h2>
</body>
</html>