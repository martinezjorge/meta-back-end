<?php

    $database = "scotchbox";
    $username = "root";
    $password = "root";
    $servername = "localhost";

    $conn = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM scotchbox.posts";

    $conn->query($sql);

    $sql = "DELETE FROM scotchbox.users";

    $conn->query($sql);

    $conn->close();

?>