<?php
// JuanCreateTable.php
// Module 9 Assignment Part 3 of 3
// Main Purpose is a Query page to search based on user form input

// The login information to the database 
$servername = "localhost";
$username = "student1";
$password = "pass";
$dbname = "baseball_01";

$conn = new mysqli($servername, $username, $password, $dbname);

$result = null;

if (isset($_POST['search'])) {

    $search = $_POST['searchTerm'];

    // FIXED: correct table + correct column
    $sql = "SELECT * FROM players WHERE name LIKE '%$search%'";
    $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Players</title>
</head>
<body>

<h1>Search Baseball Players</h1>

<form method="post">
    Enter Player Name:
    <input type="text" name="searchTerm">
    <input type="submit" name="search" value="Search">
</form>

<br>

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
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['team']}</td>
            <td>{$row['position']}</td>
            <td>{$row['batting_avg']}</td>
            <td>{$row['home_runs']}</td>
        </tr>";
    }
} elseif (isset($_POST['search'])) {
    echo "<tr><td colspan='6'>No results found</td></tr>";
}
?>

</table>

<br>
<a href="JuanIndex.php">Back to Home</a>

</body>
</html>