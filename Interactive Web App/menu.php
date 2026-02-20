<?php
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sushi Rolls Menu</title>
    <style>
.menu-container{
  height: 300px;
  background-color: #333;
}
.menu-icon{
  justify-content: center;
  display: flex;
  margin-top: 20px;
}
.menu-container{
  height: 300;
  background-color: #333;
}
.menu-icon{
  justify-content: center;
  display: flex;
  margin-top: 20px;
}
.menu-content {
  display: flex;
  justify-content: space-between;
  border-left: 1px solid white;
  border-right: 1px solid white;
}
.items, .drinks {
  width: 50%;
  padding: 20px;
}
.items ul, .drinks ul {
  list-style-type: none;
}
.items {
  border-right: 1px solid white;
}
h2 {
  text-align: center;
} 
.item-name {
  color: orange;
  display: block;
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
      <div class="menu-container">
        <div class="menu-icon">
            <img src="images/Menu.png" alt="Menu Icon">
        </div>
        <div class="menu-content">
            <div class="items">
                <h2>Sushi</h2>
                <ul>
                  <li><span class="item-name">CONTEMPORARY SANGRIA 12$:</span><br> Sake, vodka, fig leaves, peach, strawberries, green apples, citrus</li><hr>
                  <li><span class="item-name">CAROB FASHIONED 12$:</span><br> Bourbon, bananas, carob, black walnut bitters, apple wood smoke</li><hr> 
                  <li><span class="item-name">JAPANESE HIGHBALL 12$:</span><br> Gin, jasmine tea, oleo saccharum, bubbles</li><hr>
                  <li><span class="item-name">FIG LEAVES NEGRONI 12$:</span><br> Gin, fig leaves, Campari, sweet vermouth, walnut, sea salt chocolate</li><hr>
                  <li><span class="item-name">ASIAN COLADA 12$:</span><br> Rum, nori, cucumber, yuzu, pineapple, coconut, sesame oil</span><hr>
                  <li><span class="item-name">EARTHY MARTINI 12$:</span><br> Awamori, mixed wild mushroom cordial, lime, vanilla, sesame</li><hr>
                  <li><span class="item-name">PASSIONISTA 12$:</span><br> Shochu, vodka, passion fruit, vanilla, lemon grass</li><hr>
                  <li><span class="item-name">HAIR OF THE DOG 12$:</span><br> White rum, dark rum, pineapple, passion fruit, grapefruit, almond, absinth</li><hr>
                  <li><span class="item-name">TEA TIME 12$:</span><br> Gin, aperol, strawberry, matcha, grapefruit, orgeat, peach</li><hr>
                  <li><span class="item-name">CONTEMPORARY COLADA 12$:</span><br>Rum, pandan, coconut, citrus, tepache, bubbles.</li><hr>                  
                </ul>
            </div>
            <div class="drinks">
                <h2>Drinks</h2>
                <ul>
                  <li><span class="item-name">NAKED URAMAKI 11$:</span><br> Salmon and avocado, in a tobiko wrap</li><hr>
                  <li><span class="item-name">SHRIMP TEMPURA URAMAKI 11$:</span><br> Shrimp tempura and spring onions, in a sesame wrap, topped with chili yuzu mayo, and tobiko</li><hr> 
                  <li><span class="item-name">REMASTAN 13$:</span><br> Shrimp tempura and avocado, with flamed salmon wrap, topped with unagi</li><hr>
                  <li><span class="item-name">CALIFORNIA URAMAKI 12$:</span><br> Blue crab, avocado, and cucumbers, in a tobiko wrap</li><hr>
                  <li><span class="item-name">GEISHA URAMAKI 13$:</span><br> Whitefish, salmon, and avocado, in a salmon wrap, topped with wasabi mayo</li><hr>
                  <li><span class="item-name">CRAZY SHRIMP CRISPY URAMAKI 10$:</span><br> Crazy shrimp mix, in a crispy oboro wrap</li><hr>
                  <li><span class="item-name">SALMON CRISPY URAMAKI 10$:</span><br> Salmon and avocado, in a crispy oboro wrap</li><hr>
                  <li><span class="item-name">GREEN LOTUS 11$:</span><br> Salmon and whitefish in an avocado wrap, topped with togarashi</li><hr>
                  <li><span class="item-name">SALMON SKIN FUTOMAKI 8$:</span><br> Salmon skin and avocado topped with chili yuzu mayo, and tobiko</li><hr>
                  <li><span class="item-name">SALMON AMBASSADOR 16$:</span><br> Salmon and eel roll, in a tempura wrap, topped with unagi sauce</li><hr>                  
                </ul>
            </div>
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