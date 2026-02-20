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

  $sql = "SELECT customer_id,SUM(bill_amount) as total_bill_amount FROM bill WHERE bill_status = 0 GROUP BY customer_id";
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
          <a href="#about-section">About</a>
          <a href="#location-section">Location</a>
          <a href="showreserve.php">Show Reservations</a>
          <a href="login.php">Sign in</a>
        </div>
        <div class="center">
          <img src="images/Icon.png" alt="Icon">
        </div>
        <div class="right">
          <a href="menuloggedin.php">Menu</a>
          <a href="staffbill.php">Show bills</a>
          <a href="#location-section">Contact us</a>
          <a href="showfeedback.php">Show Feedbacks</a>
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

</body>
</html>
