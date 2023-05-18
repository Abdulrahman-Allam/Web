<?php
session_start();
require_once("dbcon.php");

$email = $_POST["email"];
$password = $_POST["password"];

// Check if the email and password inputs are not empty
if (empty($email) || empty($password))
{
    header("location: Login.php?error=empty");
} 
else
 {
    // Check if the email and password match a user in the database
     $sql = "SELECT * FROM users WHERE email = '$email' AND pass = '$password'";
     $check = mysqli_query($conn, $sql);

    if (mysqli_num_rows($check) > 0) 
    {
        // Login successful
        $user = mysqli_fetch_assoc($check);
        $_SESSION["name"] = $user["name"];
        header("location: index.php");
    } 
    else
    {
        // Login failed
        header("location: Login.php?error=invalid");
    }
}

mysqli_close($conn);
?>