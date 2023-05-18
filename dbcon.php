<?php
// Connect to the database
$servername = "";
$username = "";
$password = "";
$dbname = "";

$conn = mysqli_connect("localhost", "root", "", "store");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
