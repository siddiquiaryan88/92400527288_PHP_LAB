<?php
// Start the session
session_start();

// Create session variables
$_SESSION["username"] = "Nitin";
$_SESSION["email"] = "nitin@example.com";

echo "Session Created Successfully!<br>";
echo "Username: " . $_SESSION["username"] . "<br>";
echo "Email: " . $_SESSION["email"];
?>