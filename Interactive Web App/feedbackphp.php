<?php
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get feedback from form
    $feedback = $_POST["feedback"];

    // Database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "restaurant";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get customer_id from session
    $customer_id = $_SESSION["customer_id"];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO feedback (feedback_text, customer_id) VALUES (?, ?)");
    $stmt->bind_param("si", $feedback, $customer_id);

    // Execute the statement
    $stmt->execute();

    // Close the statement and connection
    $stmt->close();
    $conn->close();

    header("Location: index.php");

    exit();
}
?>
