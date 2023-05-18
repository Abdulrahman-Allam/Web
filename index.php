<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'><link rel="stylesheet" href="style.css">

</head>
<body>
  <div class="top">
    <div class='navbar' title='Menu'>
      <i class="fa fa-bars" aria-hidden="true"></i>
   </div>
   
   <div class="close">
      <i class="fa fa-times" aria-hidden="true"></i>
   </div>
<div id="navigationWrap">
  <div class="container container3 menu">
     <nav>
        <ul>
           <li><a href="index.html">Home</a></li>
           <li><a href="Products.html">Products</a></li>
           <li><a href="About us.html">About Us</a></li>
           <li><a href="Branches.html">Branches</a></li>
           <li><a href="Customer.html">Customer service</a></li>
        </ul>
     </nav>
  </div>
</div>
  <div class="topsec">
    

   <div class="topbar">
      <a href="index.php"><img src="images/Screenshot_2023-03-10_204130-removebg-preview (4).png" width="230px" alt="" style="border-radius: 50px;"></a> 
   </div>
   <div class="topbarnav">
      <a href="Products.html">Products</a>
      <a href="About us.html">About-Us</a>
      <a href="Branches.html">Branches</a>
      <a href="Customer.html">Customer-service</a>
   </div>
   <div class="topbarcart">
    <a class="login" href="cart.html"><img src="images/Cart.jpg" width="50"></a>
   </div>

   <?php
    if(isset($_SESSION["name"]))
    {
      echo '<div class="topbar2">';
      echo '<a class="login" href="Logout.php">Logout</a>';
     
      echo "</div>";
    }
    else
    {
      echo '<div class="topbar2">';
      echo '<a class="login" href="Login.php">Login</a>';
     
      echo '</div>';
      echo '<div class="topbar3">';
      echo '<a class="login" href="SignUp.php">Sign Up</a>';
      echo '</div>';
    }
   ?>

   
  </div>
</div>

  <?php

      if(isset($_SESSION["name"]))
      {
        echo '<p style="margin-left: 43%; margin-top: 2%; font-size: 30px">Welcome, <span style="color: white">' . $_SESSION["name"] . '</span></p>';
      }
  ?>


<br><br><br>
<!----SLIDESHOW-->
<section>
  <div class="container container4">
     <div class="slider">
       <div class="box1" style="background:url('images/dymatize-share.jpg');">
       </div>
       <div class="box2" style="background:url('images/R1\ creatine.jpg');">
       </div>
       <div class="box3" style="background:url('images/119998154_111973477320399_7030865551748069586_n.jpg');">
       </div>
       <div class="box4" style="background:url('images/94887770_132475448380017_4106285126374129664_n.jpg');">
       </div>
       <div class="box5" style="background:url('images/277589476_5582659385081053_8877059956632085531_n.jpg');">
       </div>

     </div>
   </div>
   <div id="test"></div>
</section>
<br>
<!---midpart-->
<div class="container container2">
   <div id="card1" class="card">
     <div class="box">
       <div class="content">
         
         <h3>Try Our Best Seller</h3>
         <p>Each serving of the world’s best-selling whey protein powder provides 24 grams of high-quality whey protein.easy mixing using just a glass and spoon. With more than 20 different flavors – including naturally flavored options – there’s no doubt this is the Optimum Nutrition Gold Standard 100% Whey Protein</p>
         <a href="Products.html">View All Products</a>
       </div>
     </div>
   </div>
 
   <div id="card2" class="card" >
     <div class="box">
       <div class="content">
         
         <h3>Your Number 1 go To Supplement Store </h3>
         <p>Our Mission Is To Provide 100% original supplements to help you achieve your goal</p>
         <a href="About us.html">About Us</a>
       </div>
     </div>
   </div>
 
   <div id="card3" class="card">
     <div class="box">
       <div class="content">
        
         <h3>Wherever you are , You'll Find Us !</h3>
         <p>We Have 63 Branches all over Egypt to Reach you Wherever you are</p>
         <a href="Branches.html">Our Branches</a>
       </div>
     </div>
   </div>
 </div>


 
  
  <Div class="formm">
    
    <img  src="Animation frames/1 (1).png" id="img" class="Game">
    <a href="#modal" class="popup-btn">How To Play?</a>

<div id="modal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close"><i class="fa fa-times-circle" aria-hidden="true"></i></button>
        <h4 class="modal-title">How To Play?</h4>
      </div>
      <div class="modal-body">
        <p style="font-weight: bold;">Welocome To Our Game, You Have 3 Tries To Get 25 Pull ups in 15 Seconds To Win a Random Discount Coupon , When You Press Start Game the timer will Start Then When You Do A Pull up Your Score Will Be Increased</p>
        <br>
        <p style="font-weight: bolder;">Controls:
        Press U to Perform a Pull up</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn">Close</button>
      </div>
    </div>
  </div>
</div>
    <p class="imgtxt" id="texxt">Play Our Game , Win Exclusive Prizes!</p>
    <p class="imgtxt" id="score">score</p>
    <p class="imgtxt" id="timer">Timer</p>
    <p class="imgtxt" id="scorect">0</p>
    <p class="imgtxt" id="timerct">15</p>
    <p class="imgtxt" id="attempts">Attempts Left:</p>
    <p class="imgtxt" id="attemptsct">3</p>
    <button class="button1" id="GameButton">Start Game</button>
    
    
  </Div>


<script src="GameScript.js"></script>
<div id="timer-container">
    <span id="timer-seconds" style="font-family: 'Times New Roman', Times, serif;">10</span>
  </div>

  <div id="container0">
    <div class="container-inner0">
      <div class="content0">
        <p>Congratulations!</p>
        
        <p>You've Won A 10% Discount</p>
        <p>Use Code:</P><P><span id="promoCode"></span></p>
      </div>
      <div class="buttons">
        <button type="button" class="confirm" id="ConfirmButton" onclick="HideDiscount()">Close</button>
        <button type="button" class="cancel" id="copyButton" onclick="copyToClipboard()">Copy To Clipboard</button>
      </div>
    </div>
  </div>
   
</div>
<div class="foot">
   <div class="foottxt">
      <p class="footsp"><a class="login2" href="index.php" target="_self">Top of Page</a> 
         <a class="login2" href="Products.html">Products</a>
          <a class="login2" href="About us.html">About Us</a> 
          <a class="login2" href="Branches.html">Branches</a> 
          <a class="login2" href="Customer.html">Customer Services</a></p>
          
   </div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js'></script><script  src="./script.js"></script>
</body>
</html>
