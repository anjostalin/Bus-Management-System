<?php
// Start the session
session_start();

if (isset($_GET['logout'])) {
    session_unset(); 
    session_destroy();
    header("Location: /Home/home.php");
    exit; 
}
?>
