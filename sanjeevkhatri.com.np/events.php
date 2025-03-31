<?php
require_once 'config.php';

$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$today = date("Y-m-d");
$sql = "SELECT * FROM events WHERE event_date >= '$today' ORDER BY event_date ASC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Upcoming Events</h2>";
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>{$row['event_name']} - {$row['event_date']} ({$row['event_category']}) - {$row['event_description']} - Contact: {$row['event_contact']}</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No upcoming events.</p>";
}

$conn->close();
?>