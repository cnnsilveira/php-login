<?php 

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['id'])) {
    die("You must be logged in to see this page. <a href=\"index.php\">Log In</a>");
}

?>