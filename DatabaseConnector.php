<?php

    // Load the project variables
    include 'ProjectVariables.php';

    // Connect to the database
    $conn = new mysqli();

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        echo "Connected successfully";
    }
