<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$checkEmail = "SELECT * FROM customer WHERE customer_email = '$email'";
$result = $conn->query($checkEmail);

if ($result->num_rows > 0) {

  header("Location: login.php");
  exit();
} else {

  $sql = "INSERT INTO customer (customer_name, customer_phone, customer_email, customer_password)
  VALUES ('$fullname', '$phone', '$email', '$password')";

if ($conn->query($sql) === TRUE) {

  // Get the customer_id of the newly inserted row
  $customer_id = $conn->insert_id;

  // Start the session and set the session variable
  session_start();
  $_SESSION['customer_id'] = $customer_id;

  header("Location: loggedin.php");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>