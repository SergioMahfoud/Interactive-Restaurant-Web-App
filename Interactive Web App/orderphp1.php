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

// Get the customer_id from the session
$customer_id = $_SESSION['customer_id'];

// Get the item_id from the form
$item_id = $_POST['item_id'];

// Get the item price from the menuitem table
$sql = "SELECT item_price FROM menuitem WHERE item_id = '$item_id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$item_price = $row['item_price'];

// Insert the order into the bill table
$sql = "INSERT INTO bill (bill_amount, customer_id, item_id)
VALUES ('$item_price', '$customer_id', '$item_id')";

if ($conn->query($sql) === TRUE) {
   header("Location:order.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
