<?php
    include 'DatabaseConnector.php';

   // Get the user data from the form
   $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];

    // validate the email address and username are unique in the database
    $query = "SELECT * FROM users WHERE email = '$email' OR username = '$username'";
    $result = $conn->query($query) or
        die("Error: " . $conn->error);
    
    // if the email or username is already in the database, then exit
    if ($result->num_rows > 0) {
        echo "Email or username already exists in the database";
        exit;
    }

    // Register the user
    $query = "INSERT INTO users (firstname, lastname, email, username, password, dob) VALUES ('$firstname', '$lastname', '$email', '$username', '$password', '$dob')";

    // execute the query
    $conn->query($query) or die("Error: " . $conn->error);

    // navigate to the login page
    header("Location: Views/login.php");
