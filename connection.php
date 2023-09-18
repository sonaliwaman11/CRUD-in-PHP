<?php
    // Establish a database connection (update these credentials)
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "crud";

    $conn = new mysqli($host, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "";
?>