<?php
// JuanCreateTable.php
// Module 8 Assignment Part 1 of 4
// Main Purpose is to create players table in baseball_01 database

$servername = "localhost";
$username = "student1";
$password = "pass";

// STEP 1: connect WITHOUT database
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// STEP 2: create database
$sql = "CREATE DATABASE IF NOT EXISTS baseball_01";
if ($conn->query($sql) === TRUE) {
    echo "Database ready.<br>";
} else {
    die("Error creating database: " . $conn->error);
}

// STEP 3: reconnect WITH database
$conn = new mysqli($servername, $username, $password, "baseball_01");

// STEP 4: create table
$sql = "CREATE TABLE IF NOT EXISTS games (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    genre VARCHAR(50),
    platform VARCHAR(50),
    release_year INT,
    rating DECIMAL(3,1)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'players' created successfully!";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>