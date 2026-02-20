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

$sql = "UPDATE bill SET bill_status = 1 WHERE customer_id = '$customer_id' AND bill_status = 0";

if ($conn->query($sql) === TRUE) {
  echo "Bill paid successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
