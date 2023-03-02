<?php
// To configure this file:
//   > Change this file name to 'connection.php'
//   > Feed the variables values with your DB settings
//   > Delete my comments 
//   > Be happy :)


// If you're using XAMPP, just create a DB with the name of "login" and leave this file as it is.

$host = "localhost"; // Your DB host name here
$db = "login"; // Your DB name here
$user = "root"; // Your DB user here
$password = ""; // Your DB password here

$mysqli = new mysqli($host, $user, $password, $db);

?>