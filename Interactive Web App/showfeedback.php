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

  $sql = "SELECT customer.customer_id, customer.customer_email, feedback.feedback_text FROM customer INNER JOIN feedback ON customer.customer_id = feedback.customer_id";
  $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Feedback Page</title>
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
        <h2>Customer Feedback</h2>
        <?php

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Customer ID: " . $row["customer_id"]. " - Customer Email: " . $row["customer_email"]. " - Feedback: " . $row["feedback_text"]. "<br>";
            }
        } else {
            echo "No results";
        }
        $conn->close();
        ?>
    </div>
    
</body>
</html>
