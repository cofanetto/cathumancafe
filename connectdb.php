<?php
    $host ="remotemysql.com";
    $user = "7Jdl7NWMsA";
    $pass = "2jGzhbsDFx";
    $dbname = "7Jdl7NWMsA";

    // Create connection
    $conn = new mysqli($host, $user, $pass ,$dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
?>