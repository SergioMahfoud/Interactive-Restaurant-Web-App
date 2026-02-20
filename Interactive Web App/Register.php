<?php
  session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Registration Page</title>
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
          <a href="index.php#about-section">About</a>
          <a href="index.php#location-section">Location</a>
          <a href="reserve.php">Reserve</a>
          <a href="login.php">Sign in</a>
        </div>
        <div class="center">
          <img src="images/Icon.png" alt="Icon">
        </div>
        <div class="right">
          <a href="menu.php">Menu</a>
          <a href="order.php">Order and Payment</a>
          <a href="index.php#location-section">Contact us</a>
          <a href="feedback.php">Feedback</a>
        </div>
    </div>
    <div class="restaurant-image">
        <div class="form">
            <p>Sign Up</p>
            <form action="registerphp.php" method="post">
                <input type="text" name="fullname" placeholder="Full Name" required>
                <input type="text" name="phone" placeholder="Phone" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button>Register</button>
                <p class="message">Already registered? <a href="login.php">Sign in</a> or <a href="stafflogin.php">login as staff</a></p>
            </form>
        </div>
    </div>
    <script>
    var links = document.querySelectorAll('a');
    
    links.forEach(function(link) {
        link.addEventListener('click', function(event) {
            if (this.getAttribute('href') === "reserve.php" || this.getAttribute('href') === "feedback.php"  || this.getAttribute('href') === "order.php") {
                event.preventDefault();
                alert('User is not logged in');
                window.location.href = "login.php";
            }
        });
    });
    

</script>
</body>
</html>