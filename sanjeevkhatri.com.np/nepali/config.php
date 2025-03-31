<?php
$servername = "fdb1013.awardspace.net";
$username = "2523899_nepali";
$password = "PunamPandit1";
$dbname = "2523899_nepali";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set the character set to utf8mb4
$conn->set_charset("utf8mb4");
?>