<?php
  session_start();
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
        @keyframes change {
    0%
    {
        background-image: url('images/sushi 13.jpg');
    }
    25%
    {
        background-image: url('images/sushi 12.jpg');
    }
    75%
    {
        background-image: url('images/sushi 11.jpg');
    }
    100%
    {
        background-image: url('images/sushi 13.jpg');
    }
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
    <div class="restaurant-image">
        <div class="form2">
            <form action="feedbackphp.php" method="post">
                <p>Feedback</p>
                <textarea id="feedback" name="feedback" placeholder="Rate us and share your experience now!" rows="10" cols="50" required></textarea>
                <button>Submit</button>
            </form>
        </div>
    </div>

</body>
</html>