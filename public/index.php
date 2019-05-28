<?php

    session_start();

    $_SESSION['logged_in'] = False;

    if ($_SESSION['logged_in']) {
        include __DIR__ . '/../public/existing-user.html.php';
    } else {
        include __DIR__ . '/../public/new-user.html.php';
    }

?>