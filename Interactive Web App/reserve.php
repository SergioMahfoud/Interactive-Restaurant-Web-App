<?php
  session_start();
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
.form3 {
    width: 350px;
    height: 250px;
    padding: 16px;
    background-color: #fff;
    margin: 0 auto;
    border-radius: 4px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form3 p {
    font-size: 20px;
    font-weight: bold;
    text-align: center;
}

.form3 input[type="date"],
.form3 input[type="time"],
.form3 input[type="people"] {
    display: block;
    width: 95%;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

.form3 button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 4px;
    background-color: #333;
    color: #fff;
    cursor: pointer;
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
          <a href="menuloggedin.php">Menu</a>
          <a href="order.php">Order and Payment</a>
          <a href="index.php#location-section">Contact us</a>
          <a href="feedback.php">Feedback</a>
        </div>
    </div>
    <div class="restaurant-image">
        <div class="form3">
            <form action="reservephp.php" method="post">
                <p>Reservation</p>
                <input type="date" name="date" required>
                <input type="time" name="time" required>
                <p>number of people:  <input type="number" name="people" min="1" max="20" required></p>
                <button>Submit</button>
            </form>
            
        </div>
    </div>
    <script>
    var links = document.querySelectorAll('a');
    
    links.forEach(function(link) {
        link.addEventListener('click', function(event) {
            if (this.getAttribute('href') === "reserve.php" || this.getAttribute('href') === "feedback.php"  || this.getAttribute('href') === "order.php") {
                event.preventDefault();
    
                var customerEmail = '<?php echo $_SESSION["customer_id"]; ?>';
    
                if (customerEmail) {
                  
                   if(this.getAttribute('href') === "reserve.php") {window.location.href = "reserve.php";}
                   else if(this.getAttribute('href') === "feedback.php") {window.location.href = "feedback.php";}
                   else {window.location.href = "order.php";}

                } else {
                    alert('User is not logged in');
                    window.location.href = "login.php";
                }
            }
        });
    });
</script>
 </body>
</html>