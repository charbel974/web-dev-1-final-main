<?php

    // Load the project variables
    include 'ProjectVariables.php';

    // connect using the variables from ProjectVariables.php
    $conn = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE, $DB_PORT);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error . "<br>");
    } else {
        echo "Connected successfully <br>";
    }
