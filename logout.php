<?php
// Assuming you have already started the session
session_start();

// Unset or destroy specific session variables
unset($_SESSION['username']);
unset($_SESSION['name']);
unset($_SESSION['id']);

// Optionally, destroy the entire session
// session_destroy();

// Redirect the user to the login page or any other appropriate page
header("Location: login.php");
exit();
?>
