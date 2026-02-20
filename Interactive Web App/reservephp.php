<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$customer_id = $_SESSION['customer_id'];

$date = mysqli_real_escape_string($conn, $_POST['date']);
$time = mysqli_real_escape_string($conn, $_POST['time']);
$people = mysqli_real_escape_string($conn, $_POST['people']);

$sql = "INSERT INTO reservation (customer_id, reservation_date, reservation_time, reservation_people)
VALUES ('$customer_id', '$date', '$time', '$people')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
