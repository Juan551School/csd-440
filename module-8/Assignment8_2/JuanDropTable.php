<?php
// JuanDropTable.php
// Module 8 Assignment Part 2 of 4
// Purpose to drop the players table


$servername = "localhost";
$username = "student1";
$password = "pass";
$dbname = "baseball_01";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DROP TABLE players";

if ($conn->query($sql) === TRUE) {
    echo "Table dropped successfully!";
} else {
    echo "Error dropping table: " . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Drop Table</title>
</head>
<body>
<h2>Drop Table Page</h2>
</body>
</html>