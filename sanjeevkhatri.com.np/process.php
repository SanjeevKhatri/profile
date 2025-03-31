<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $event_name = $_POST["event_name"];
    $event_category = $_POST["event_category"];
    $event_date = $_POST["event_date"];
    $event_description = $_POST["event_description"];
    $event_contact = $_POST["event_contact"];

    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO events (event_name, event_category, event_date, event_description, event_contact) VALUES ('$event_name', '$event_category', '$event_date', '$event_description', '$event_contact')";

    if ($conn->query($sql) === TRUE) {
        echo "Event created successfully!";

        // Send email notification
        // $to = $event_contact;
        // $subject = "Event Notification: $event_name";
        // $message = "Dear Event Participant,\n\nYou are invited to the event '$event_name' scheduled on $event_date. Details: $event_description\n\nContact: $event_contact";

        // mail($to, $subject, $message);

        // Redirect to events.php
        header("Location: events.php");
        exit(); // Ensure script stops executing after redirection
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>