<?php

    /* This works like a charm*/

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "scotchbox";

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['username'];
    $email = $_POST['email'];
    $hash = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "INSERT INTO users" . "(`fname`, `lname`, `username`, `password`, `email`) " . " VALUES ('$fname','$lname','$email','$hash','$uname')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();