<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "../includes/connection.php";

$username = trim($_POST['username']);

echo "You entered \"$username\"";
echo "<br>";

try {
    $users = $myPDO->query("SELECT * FROM users");
    //echo "retrieved results";
} catch (Exception $e) {
    echo "Unable to retrieve results";
    exit;
}

// First, check if the username exists

$exists = $myPDO->prepare("Select * From users WHERE user_name=?");
$exists->execute(array($username));
$result = $exists->fetchAll();

if ( sizeof($result) > 0 ) {
    die("User already exists. Please try again.");
}   

// If the user doesn't already exist, create it! 

$stmt = $myPDO->prepare("INSERT INTO users (user_name) VALUES (?)");
$stmt->execute(array($username));

echo "User \"$username\" created!";
