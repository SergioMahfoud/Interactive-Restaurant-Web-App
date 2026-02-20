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

  $sql = "SELECT customer.customer_id, customer.customer_email, reservation.reservation_date, reservation.reservation_time, reservation.reservation_people FROM customer INNER JOIN reservation ON customer.customer_id = reservation.customer_id";
  $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Reservation Page</title>
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
        <h2>Customer Reservations</h2>
        <?php

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Customer ID: " . $row["customer_id"]. " - Customer Email: " . $row["customer_email"]. " - Reservation Date: " . $row["reservation_date"]. " - Reservation Time: " . $row["reservation_time"]. "- Number of People: " . $row["reservation_people"]. "<br>";
            }
        } else {
            echo "No results";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
