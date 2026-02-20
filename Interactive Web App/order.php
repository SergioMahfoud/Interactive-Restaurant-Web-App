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
      <div class="menu-container">
        <div class="menu-icon">
            <img src="images/Menu.png" alt="Menu Icon">
        </div>
        <div class="menu-content">
            <div class="items">
                <h2>Sushi</h2>
                <ul>
                <li>
  <span class="item-name">NAKED URAMAKI 11$:</span><br> Salmon and avocado, in a tobiko wrap
  <form action="orderphp1.php" method="post">
    <input type="hidden" name="item_id" value="11">
    <button type="submit" class="order-button">Order Now</button>
  </form>
</li><hr>
<li>
  <span class="item-name">SHRIMP TEMPURA URAMAKI 11$:</span><br> Shrimp tempura and spring onions, in a sesame wrap, topped with chili yuzu mayo, and tobiko
  <form action="orderphp1.php" method="post">
    <input type="hidden" name="item_id" value="12">
    <button type="submit" class="order-button">Order Now</button>
  </form>
</li><hr>
<li>
  <span class="item-name">REMASTAN 13$:</span><br> Shrimp tempura and avocado, with flamed salmon wrap, topped with unagi
  <form action="orderphp1.php" method="post">
    <input type="hidden" name="item_id" value="13">
    <button type="submit" class="order-button">Order Now</button>
  </form>
</li><hr>
<li>
  <span class="item-name">CALIFORNIA URAMAKI 12$:</span><br> Blue crab, avocado, and cucumbers, in a tobiko wrap
  <form action="orderphp1.php" method="post">
    <input type="hidden" name="item_id" value="14">
    <button type="submit" class="order-button">Order Now</button>
  </form>
</li><hr>
<li>
  <span class="item-name">GEISHA URAMAKI 13$:</span><br> Whitefish, salmon, and avocado, in a salmon wrap, topped with wasabi mayo
  <form action="orderphp1.php" method="post">
    <input type="hidden" name="item_id" value="15">
    <button type="submit" class="order-button">Order Now</button>
  </form>
</li><hr>
<li>
  <span class="item-name">CRAZY SHRIMP CRISPY URAMAKI 10$:</span><br> Crazy shrimp mix, in a crispy oboro wrap
  <form action="orderphp1.php" method="post">
    <input type="hidden" name="item_id" value="16">
    <button type="submit" class="order-button">Order Now</button>
  </form>
</li><hr>
<li>
  <span class="item-name">SALMON CRISPY URAMAKI 10$:</span><br> Salmon and avocado, in a crispy oboro wrap
  <form action="orderphp1.php" method="post">
    <input type="hidden" name="item_id" value="17">
    <button type="submit" class="order-button">Order Now</button>
  </form>
</li><hr>
<li>
  <span class="item-name">GREEN LOTUS 11$:</span><br> Salmon and whitefish in an avocado wrap, topped with togarashi
  <form action="orderphp1.php" method="post">
    <input type="hidden" name="item_id" value="18">
    <button type="submit" class="order-button">Order Now</button>
  </form>
</li><hr>
<li>
  <span class="item-name">SALMON SKIN FUTOMAKI 8$:</span><br> Salmon skin and avocado topped with chili yuzu mayo, and tobiko
  <form action="orderphp1.php" method="post">
    <input type="hidden" name="item_id" value="19">
    <button type="submit" class="order-button">Order Now</button>
  </form>
</li><hr>
<li>
  <span class="item-name">SALMON AMBASSADOR 16$:</span><br> Salmon and eel roll, in a tempura wrap, topped with unagi sauce
  <form action="orderphp1.php" method="post">
    <input type="hidden" name="item_id" value="20">
    <button type="submit" class="order-button">Order Now</button>
  </form>
</li><hr>
</ul>
            </div>
            <div class="drinks">
                <h2>Drinks</h2>
                <ul>
                <li>
  <span class="item-name">CONTEMPORARY SANGRIA 12$:</span><br> Sake, vodka, fig leaves, peach, strawberries, green apples, citrus
  <form action="orderphp1.php" method="post">
    <input type="hidden" name="item_id" value="1">
    <button type="submit" class="order-button">Order Now</button>
  </form>
</li><hr>
<li>
  <span class="item-name">CAROB FASHIONED 12$:</span><br> Bourbon, bananas, carob, black walnut bitters, apple wood smoke
  <form action="orderphp1.php" method="post">
    <input type="hidden" name="item_id" value="2">
    <button type="submit" class="order-button">Order Now</button>
  </form>
</li><hr>
<li>
  <span class="item-name">JAPANESE HIGHBALL 12$:</span><br> Gin, jasmine tea, oleo saccharum, bubbles
  <form action="orderphp1.php" method="post">
    <input type="hidden" name="item_id" value="3">
    <button type="submit" class="order-button">Order Now</button>
  </form>
</li><hr>
<li>
  <span class="item-name">FIG LEAVES NEGRONI 12$:</span><br> Gin, fig leaves, Campari, sweet vermouth, walnut, sea salt chocolate
  <form action="orderphp1.php" method="post">
    <input type="hidden" name="item_id" value="4">
    <button type="submit" class="order-button">Order Now</button>
  </form>
</li><hr>
<li>
  <span class="item-name">ASIAN COLADA 12$:</span><br> Rum, nori, cucumber, yuzu, pineapple, coconut, sesame oil
  <form action="orderphp1.php" method="post">
    <input type="hidden" name="item_id" value="5">
    <button type="submit" class="order-button">Order Now</button>
  </form>
</li><hr>
<li>
  <span class="item-name">EARTHY MARTINI 12$:</span><br> Awamori, mixed wild mushroom cordial, lime, vanilla, sesame
  <form action="orderphp1.php" method="post">
    <input type="hidden" name="item_id" value="6">
    <button type="submit" class="order-button">Order Now</button>
  </form>
</li><hr>
<li>
  <span class="item-name">PASSIONISTA 12$:</span><br> Shochu, vodka, passion fruit, vanilla, lemon grass
  <form action="orderphp1.php" method="post">
    <input type="hidden" name="item_id" value="7">
    <button type="submit" class="order-button">Order Now</button>
  </form>
</li><hr>
<li>
  <span class="item-name">HAIR OF THE DOG 12$:</span><br> White rum, dark rum, pineapple, passion fruit, grapefruit, almond, absinth
  <form action="orderphp1.php" method="post">
    <input type="hidden" name="item_id" value="8">
    <button type="submit" class="order-button">Order Now</button>
  </form>
</li><hr>
<li>
  <span class="item-name">TEA TIME 12$:</span><br> Gin, aperol, strawberry, matcha, grapefruit, orgeat, peach
  <form action="orderphp1.php" method="post">
    <input type="hidden" name="item_id" value="9">
    <button type="submit" class="order-button">Order Now</button>
  </form>
</li><hr>
<li>
  <span class="item-name">CONTEMPORARY COLADA 12$:</span><br> Rum, pandan, coconut, citrus, tepache, bubbles
  <form action="orderphp1.php" method="post">
    <input type="hidden" name="item_id" value="10">
    <button type="submit" class="order-button">Order Now</button>
  </form>
</li><hr>
</ul>
            </div>
        </div>
        <div style="text-align: center; margin-top: 20px; margin-bottom: 40px;">
  <a href="bill.php" style="background-color: orange; color: white; padding: 10px 20px; text-decoration: none;">Pay Your Bill Here!</a>
</div>
    </div>
    
</body>
</html>
