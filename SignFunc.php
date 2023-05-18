<?php

require_once("dbcon.php");


// Get the form data
$fname = $_POST["firstname"];
$lname = $_POST["lastname"];

$name = $fname . ' ' . $lname;

$email = $_POST["email"];
$phone_number = $_POST["phonenumber"];
$age = $_POST["age"];
$pass = $_POST["password"];

// Check if the email already exists
$sql = "SELECT * FROM users WHERE email = '$email'";
$check = mysqli_query($conn, $sql);

if (mysqli_num_rows($check) > 0)
{
    header("location: SignUp.php?error=email");
    mysqli_close($conn);
    exit();
}


$sql = "SELECT * FROM users WHERE phone_number = '$phone_number'";
$check = mysqli_query($conn, $sql);

if (mysqli_num_rows($check) > 0)
{
    header("location: SignUp.php?error=phone");
    mysqli_close($conn);
    exit();
}


// Insert the data into the database
$sql = "INSERT INTO users (name, age, email, phone_number, pass)
VALUES ('$name', '$age', '$email', '$phone_number', '$pass')";

if (mysqli_query($conn, $sql))
{
    header("location: SignUp.php?error=none");
}
else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>