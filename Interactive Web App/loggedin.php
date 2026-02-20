<?php
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sushi Rolls HomePage</title>
</head>
<style>
    .parallex-image-section-bar {
    height: 500px;
    background-image: url('images/bar.jpg');
    background-position: 50% 20%;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
  }

  .reservation-image {
    height: 500px;
    background-image: url('images/table 2.jpg');
    background-size: cover;
    margin-top: 40px;
    margin-bottom: 10px;
  }

  .restaurant-image {
    max-width: 100%;
    display: block;
    margin: 0;
    padding: 0;
    width: 1500px;
    height: 571px;
    background-image: url('images/sushi 7.jpg');
    animation: change 10s infinite ease-in-out;
  }

   @keyframes change {
    0% {
      background-image: url('images/sushi 7.jpg');
    }
    25% {
      background-image: url('images/sushi 6.jpg');
    }
    75% {
      background-image: url('images/sushi 2.jpg');
    }
    100% {
      background-image: url('images/sushi 7.jpg');
    }
  }
</style>
<body>
    <div class="navbar">
        <div class="left">
          <a href="#about-section">About</a>
          <a href="#location-section">Location</a>
          <a href="reserve.php">Reserve</a>
          <a href="login.php">Sign in</a>
        </div>
        <div class="center">
          <img src="images/Icon.png" alt="Icon">
        </div>
        <div class="right">
          <a href="menuloggedin.php">Menu</a>
          <a href="order.php">Order and Payment</a>
          <a href="#location-section">Contact us</a>
          <a href="feedback.php">Feedback</a>
        </div>
    </div>
    <div class="restaurant-image">
        
    </div>
    <div class="container">
        <div class="first-column" id="location-section">Address
            <p>Zouk Mikael</p><br>
            <a href="https://www.google.com/maps/place/Ultimate+Ceramica/@33.9671604,35.6121208,15.39z/data=!4m19!1m12!4m11!1m3!2m2!1d35.6142248!2d33.9655173!1m6!1m2!1s0x151f415e941d62b9:0xfd9b634181306696!2sKyoto+sushi+zouk,+XJ9F%2BC35+Unnamed+Road!2m2!1d35.6226869!2d33.9685911!3m5!1s0x151f4100142d8bc7:0x82706fd403f624e4!8m2!3d33.9703275!4d35.6206146!16s%2Fg%2F11vy__yv_n?entry=ttu" target="_blank">
            <button class="sienna-button" >Directions</button></a>
        </div>
        <div class="column">Hours<br><br>
            Sunday-Thursday
              <div class="smaller">
            6:30pm-11:00pm
              </div>
            <br>
            <br>Friday & Saturday
              <div class="smaller">
            5:30pm-1:00am
              </div>
            </p>
        </div>
        <div class="last-column">Contact Us<br><br>
            <a href="https://wa.me/9613754808">+961 3 754 808</a>
            <br><br>
            <a href="mailto:sushi@rolls.com">sushi@rolls.com</a>
        </div>
      </div>
      <div class="parallex-image-section-bar"></div>
      <div class="container">
        <div class="first-column-2"><img src="images/staff 2.jpeg" alt="eating sushi" width="300" height="250"></div>
        <div class="column-2"><img src="images/staff 1.jpg" alt="sushi chef" width="300" height="250"></div>
        <div class="last-column-2" id="about-section">SUSHI ROLSS
        <br><br> Step into the vibrant world of Crazy Rolls, where sushi takes on a whole new dimension. Our inventive creations are a fusion of tradition and innovation, promising a rollercoaster ride of flavors. Join us in Zouk Mikael for a taste adventure like no other.
        </div>

      </div>
      <div class="reservation-image"></div>

</body>
</html>