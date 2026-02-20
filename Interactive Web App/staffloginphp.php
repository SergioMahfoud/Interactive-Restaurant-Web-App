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

  $sql = "SELECT * FROM staff WHERE staff_email = '$email' AND staff_password = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();

    $taff_id = $row['staff_id'];

    session_start();
    $_SESSION['staff_id'] = $staff_id;

    header("Location: loggedinstaff.php");
    exit();
}

else {
    header("Location: login.php");
  }
}

$conn->close();
?>

