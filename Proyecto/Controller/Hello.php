<?php
// Controller/Hello.php

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the User.php class
    require_once '../Classes/User.php';
    require_once '../Classes/Product.php';


// Create a new User object
$user = new User(1, "Alexander", "User");

// Include the view file
if (file_exists('../Views/userProfile.php')) {
    include '../Views/userProfile.php';
} else {
    die('View file not found');
}
?>
