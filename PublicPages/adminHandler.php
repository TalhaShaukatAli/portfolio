<?php

// User and password Array
$users = array(
    'talha' => 'weekndfan',
    'elias' => 'lebanon',
    'justin' => 'pleasedontfailme',
);

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if username and password are empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter username.";
    } else {
        $username = trim($_POST["username"]);
    }

    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($username_err) && empty($password_err)) {
        // Check if the username exists in the array and if the password matches
        if (array_key_exists($username, $users) && $users[$username] === $password) {
            // Password is correct, so start a new session
            session_start();

            // Store data in session variables
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;

            // Redirect user to admin page
            header("location: ./admin.php");
        } else {
            // Display an error message if username or password is incorrect
            $password_err = "The username or password you entered is incorrect.";
        }
    }
}