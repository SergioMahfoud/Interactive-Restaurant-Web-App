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

  $sql = "SELECT customer_id, SUM(bill_amount) as total_bill_amount FROM bill WHERE bill_status = 0 AND customer_id = '$customer_id' GROUP BY customer_id";
  $result = $conn->query($sql);
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Bill Page</title>
    <style>
p{
    color: black;
}
.order-button {
    display: block;
    width: 100px;
    height: 25px;
    margin: 10px 0;
    background-color: orange;
    color: white;
    text-align: center;
    line-height: 25px;
    cursor: pointer;
}

    </style>
</head>

<body>
    <div class="navbar">
        <div class="left">
          <a href="loggedin.php#about-section">About</a>
          <a href="loggedin.php#location-section">Location</a>
          <a href="reserve.php">Reserve</a>
          <a href="login.php">Sign in</a>
        </div>
        <div class="center">
          <img src="images/Icon.png" alt="Icon">
        </div>
        <div class="right">
          <a href="menuloggedin.php">Menu</a>
          <a href="order.php">Order and Payment</a>
          <a href="loggedin.php#location-section">Contact us</a>
          <a href="feedback.php">Feedback</a>
        </div>
    </div>
    <div>
        <h2>Total Bill Amount by Customer ID</h2>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Customer ID: " . $row["customer_id"]. " - Total Bill Amount: " . $row["total_bill_amount"]. "<br>";
            }
        } else {
            echo "No results";
        }
        $conn->close();
        ?>
    </div>
    <form action="pay.php" method="post">
  <button type="submit" class="order-button">PAY</button>
</form>
</body>
</html>
