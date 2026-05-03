<?php
// YourNameQueryTable.php
// Module 8 Assignment Part 4 of 4
// Purpose for query and display players table data

$servername = "localhost";
$username = "student1";
$password = "pass";
$dbname = "baseball_01";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM players";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Query Table</title>
</head>
<body>

<h2>Players Table</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Team</th>
    <th>Position</th>
    <th>Batting Avg</th>
    <th>Home Runs</th>
</tr>

<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['team']}</td>
                <td>{$row['position']}</td>
                <td>{$row['batting_avg']}</td>
                <td>{$row['home_runs']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No records found</td></tr>";
}

$conn->close();
?>

</table>

</body>
</html>