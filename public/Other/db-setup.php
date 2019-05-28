<?php

    /* Add Tables to Database using PHP */

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=scotchbox;charset=utf8','root', 'root');
        $pdo->setAttribute(PDO::ATR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'CREATE TABLE users (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
        fname TEXT,
        lname TEXT,
        email TEXT,
        password TEXT,
        username TEXT
        ) DEFAULT CHARACTER SET uft8 ENGINE=InnoDB';

        $pdo->exec($sql);

        $output = 'Posts table successfuly created.';

    } catch (PDOException $e) {
        $output = 'Database error: ' . $e->getMessage() . ' in ' .
        $e->getFile() . ':' . $e->getLine();
    }

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=scotchbox;charset=utf8','root', 'root');
        $pdo->setAttribute(PDO::ATR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'CREATE TABLE posts (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
        title TEXT,
        body TEXT
        ) DEFAULT CHARACTER SET uft8 ENGINE=InnoDB';

        $pdo->exec($sql);

        $output = 'Posts table successfuly created.';

    } catch (PDOException $e) {
        $output = 'Database error: ' . $e->getMessage() . ' in ' .
        $e->getFile() . ':' . $e->getLine();
    }


    try {
        $pdo = new PDO('mysql:host=localhost;dbname=scotchbox;charset=utf8','root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'CREATE TABLE post_users (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
        user_id INT,
        post_id INT
        ) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB';

        $pdo->exec($sql);

        $output = 'Posts Users table successfuly created.';

    } catch (PDOException $e) {
        $output = 'Database error: ' . $e->getMessage() . ' in ' .
        $e->getFile() . ':' . $e->getLine();
    }

    echo($output);

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=scotchbox;charset=utf8','root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'CREATE TABLE comments (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
        comment TEXT
        ) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB';

        $pdo->exec($sql);

        $output = 'Comments table successfuly created.';

    } catch (PDOException $e) {
        $output = 'Database error: ' . $e->getMessage() . ' in ' .
        $e->getFile() . ':' . $e->getLine();
    }

    echo($output);

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=scotchbox;charset=utf8','root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'CREATE TABLE post_user_comments (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
        post_id INT,
        user_id INT
        ) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB';

        $pdo->exec($sql);

        $output = 'Comments table successfuly created.';

    } catch (PDOException $e) {
        $output = 'Database error: ' . $e->getMessage() . ' in ' .
        $e->getFile() . ':' . $e->getLine();
    }

    echo($output);