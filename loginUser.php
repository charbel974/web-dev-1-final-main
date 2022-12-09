<?php

    include 'DatabaseConnector.php';

    // Get the user data from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // validate the email address and username are unique in the database
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query) or
        die("Error: " . $conn->error);

    // if user is not in the database, then send error message
    if ($result->num_rows == 0) {
        echo "Username or password is incorrect";
        exit;
    }

    // navigate to the home page
    header("Location: Views/home.php");
