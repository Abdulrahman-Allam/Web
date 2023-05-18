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
   <div class="formm">
   <form action="SignFunc.php" method="POST">
    <div class="title">Welcome</div>
    <h2>Already have an account?  <a style="color: gray;" href="Login.php">Login</a></h2>
    <br>
    <label for="firstname">First Name:</label>
    <br>
    <input type="text" id="first" name="firstname">
    <br>
    <p id="errorfn" style="color: red; font-size: large; margin-left: 30%;"></p>
    <br><br>
    <label for="lastname">Last Name:</label>
    <br>
    <input type="text" id="last" name="lastname">
    <br>
    <p id="errorln" style="color: red; font-size: large; margin-left: 30%;"></p>
    
    <br><br>
    <label for="email">Email:</label>
    <br>
    <input type="text" id="email" name="email">
    <br>
    <p id="errormail" style="color: red; font-size: large; margin-left: 40%;"></p>
    
    <br><br>
    <label for="phonenumber">Phone number:</label>
    
    <br>
    <input type="number" id="phone" name="phonenumber">
    <br>
    <p id="errorphone" style="color: red; font-size: large; margin-left: 30%;"></p>
    
    <br><br>
    
  
    




    <label for="age">Age:</label>
    <br>
    <input type="number" id="age" name="age">
    <br><br>
    <span id="age-error" style="color: red; font-size: large; margin-left: 35%;"></span>
    <br>
    <label for="password">Password:</label>
    <br>
    <input type="password" id="password" name="password">
    <br><br>
    <label for="passwordconfirm">confirm password:</label>
    <br>
    <input type="password" id="passwordconfirm" name="password_confirm">
    <br><br>
    <?php
        if (isset($_GET["error"]))
        {
          if ($_GET["error"] == "email")
          {
            echo "<span style='color: red; font-size: large; margin-left: 30%;'> The Email is already used </span>";
          }
          if ($_GET["error"] == "phone")
          {
            echo "<span style='color: red; font-size: large; margin-left: 30%;'> The Phone number is already used </span>";
          }

          if ($_GET["error"] == "none")
          {
            echo "<span style='color: lime; font-size: large; margin-left: 30%;'> The Account is successfully created </span>";
          }
        }
    ?>
    <span id="password-error" style="color: red; font-size: large; margin-left: 30%;"></span>
    <br><br>
    
    <br>
    <input type="submit" class="submitt" value="Sign up" onclick=" return ValidateInput()">
  </form>
</div>

<script src="SignUp.js"></script>


<br><br><br>


 </body>
</html>