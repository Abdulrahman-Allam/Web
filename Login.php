<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="SignStyle.css">
    </head>
    <body>
    <div class="topbar">
        <a href="index.php"><img style="margin-left: 1%;" src="images/Screenshot_2023-03-10_204130-removebg-preview (4).png" width="230px" alt=""></a> 
    </div>
    <div class="topbar2">
      <a class="login2 pad" href="Products.html">Products</a>
        <a class="login2 pad" href="About us.html">About Us</a> 
        <a class="login2 pad" href="Branches.html">Branches</a> 
        <a class="login2 pad" href="Customer.html">Customer Services</a></p>
   </div>
   <div class="formmlog">
   <form action="LogFunc.php" method="POST">
    <div class="title">Welcome
      <?php
        if (isset($_GET["error"]))
        {
          if ($_GET["error"] == "empty")
          {
            echo "<span style='color: red; font-size: large; margin-left: 30%;'> Please provide both email and password </span>";
          }
          if ($_GET["error"] == "invalid")
          {
            echo "<span style='color: red; font-size: large; margin-left: 30%;'> Invalid email or password </span>";
          }
        }
      ?>
    </div>
    <br>
    <label for="email">Email:</label>
    <br>
    <input type="text" id="email" name="email">
    <br>
    <p id="errormail" style="color: red; font-size: large; margin-left: 40%;"></p>
    <label for="password">Password:</label>
    <br>
    <input type="password" id="password" name="password">
    <br><br>
    <h2>Dont have an account?  <a style="color: black;" href="SignUp.php">Sign Up</a></h2>
    <br>
    <input type="submit" class="submitt" value="Login" onclick=" return ValidateInput()">
  </form>
</div>

<script src="SignUp.js"></script>

<br><br><br>


 </body>
</html>