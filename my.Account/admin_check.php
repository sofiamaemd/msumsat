<?php
session_start(); // Start the session

// Function to check if the user is logged in as admin
function checkAdminAuthentication() {
    // Check if the user is logged in and the "user" session variable is set
    if (isset($_SESSION["user"]) && $_SESSION["user"] === "yes") {
        // Check if the role is "admin"
        if ($_SESSION["role"] === "admin") {
            // User is logged in as admin, continue
            return;
        }
    }

    // User is not logged in as admin or authentication failed, redirect to login.php
    header("Location: login.php");
    exit();
}

// Call the function to perform the admin authentication check
checkAdminAuthentication();
?>
