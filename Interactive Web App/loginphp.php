<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  $sql = "SELECT * FROM customer WHERE customer_email = '$email' AND customer_password = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();

    $customer_id = $row['customer_id'];

    session_start();
    $_SESSION['customer_id'] = $customer_id;

    header("Location: loggedin.php");
    exit();
}

else {
    header("Location: login.php");
  }
}

$conn->close();
?>
