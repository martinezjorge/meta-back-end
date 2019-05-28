<?php

    if (!empty($_POST)) {
        session_start();
        $conn = "mysql:host=localhost;dbname=scotchbox;charset=utf8";
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $uname = $_POST['username'];
        $email = $_POST['email'];
        $hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
        try {
            $pdo = new PDO($conn, "root", "root");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = 'INSERT INTO `users` SET
                `fname` = :fname,
                `lname` = :lname, 
                `email` = :email,
                `password` = :pass, 
                `username` = :username';
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':fname', $_POST['fname']);
            $stmt->bindValue(':lname', $_POST['lname']);
            $stmt->bindValue(':email', $_POST['email']);
            $stmt->bindValue(':pass', $hash);
            $stmt->bindValue(':username', $_POST['username']);
            $pdo->exec($sql);
            echo("New Record Added!");
        } catch (PDOException $e) {
            echo 'Adding Record Failed';
            echo 'Database error: ' . $e->getMessage() . ' in '
            . $e->getFile() . ':' . $e->getLine();
        }
    }