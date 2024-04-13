<!DOCTYPE html>
<html>
  <head>
    <title>LifeTrackR | Home</title>
    <link rel="stylesheet" href="homeCss.css" />
  </head>
  <body>
    <header>
      <div class="headerLogoName">
        <img
          src="LogoLight.jpg"
          alt="img isn't responding"
          height="50px"
          width="50px"
          style="float: left"
        />
        <h3 id="siteName">LifeTrackR</h3>
      </div>
      <input type="button" class="login_button" onclick="window.location.href = '../login page/login page.php'" name="logout" value="Logout">
      <div class="headerButton">
        <button onclick="window.location.href = '../About USS/aboutus.html'">
          About
        </button>
        <button
          onclick="window.location.href = '../Contact/contactindex.html' "
        >
          Contact
        </button>
        <button
          onclick="window.location.href = '../services/serviceIndex.html'"
        >
          Services
        </button>
      </div>
    </header>

    <div class="Homecontainer">
      <h2 id="himsg">
        
      <?php

      include("../config.php");
      echo "HI  ". $username ; 

      ?>
      </h2>
      <button
        class="Fitness"
        onclick="window.location.href = '../Fitness/fitmain.php'"
      >
        <h3>Fitness</h3>
        <img
          src="fitnessImg.png"
          alt="Img isn't responding"
          height="200px"
          widhth="200px"
        />
        <p class="textbelowimage">Forge Your Path to Greatness</p>
      </button>
      <button
        class="EMS"
        onclick="window.location.href = '../EventManager/em.php'"
      >
        <h3>Event Manager</h3>
        <img
          src="eventImg.png"
          alt="Img isn't responding"
          height="200px"
          widhth="200px"
        />
        <p class="textbelowimage">Where Imagination Meets Execution</p>
      </button>
      <button class="Finance" onclick="window.location.href = '../Finance/finance.php'">
        <h3>Finance</h3>
        <img
          src="financeImg.png"
          alt="Img isn't responding"
          height="200px"
          widhth="200px"
          
        />
        <p class="textbelowimage">Smart Strategies, Brighter Finances</p>
      </button>
      <button
        class="Timer"
        onclick="window.location.href = '../TimeManager/timeindex.html'"
      >
        <h3>Timer</h3>
        <img
          src="timerImg.png"
          alt="Img isn't responding"
          height="200px"
          widhth="200px"
        />
        <p class="textbelowimage">Seize the Moment</p>
      </button>
      <a href="../ShopOnline/7.5 merchpage.php">
        <button class="Shop" onclick="">
          <h3>Shop</h3>
          <img
            src="shopImg.png"
            alt="Img isn't responding"
            height="200px"
            widhth="200px"
          />
          <p class="textbelowimage">Buy our latest Merchendise</p>
        </button></a
      >
      <button
        class="premium"
        onclick="window.location.href = '../Premium/premium.html'"
      >
        <h3>Buy Premium</h3>
        <img
          src="premImg.png"
          alt="Img isn't responding"
          height="200px"
          widhth="200px"
        />
        <p class="textbelowimage">
          Unlock additional management systems by going Premium
        </p>
      </button>
    </div>
  </body>
</html>
<?php
if(isset($_POST['logout'])){

// To stop the session and unset all session variables
session_unset();

// To completely destroy the session data
session_destroy();


exit();
header("Location:../login page/login page.php.php");



}

?>