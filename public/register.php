<?php

    if (!empty($_POST)) {
        session_start();
        $hash = password_hash($_POST['r_password'], PASSWORD_BCRYPT);
        $data = [$_POST['r_fname'], $_POST['r_lname'],$_POST['r_email'], $hash,$_POST['r_username'] ];
        $conn = "mysql:host=localhost;dbname=scotchbox";
        try {
            $db = new PDO($conn, "root", "root", [
                PDO::ATTR_PERSISTENT => true
                ]);
            $statement = $db->prepare("INSERT INTO users (fname, lname, email, password, username) VALUES (?,?,?,?,?)");
            if ($statement->execute($data)) {
                //$_SESSION['SUCCESS_MESSAGE'] = 'Congratulations, '.$_POST['fname'].'. You have successfully created a new account.';
                $output = 'Congratulations, '.$_POST['r_fname'].'. You have successfully created a new account.';
                $_SESSION['user'] = $_POST['r_username'];
                // This has to match to an actual file location on your server
                include __DIR__ . '/../public/existing-user.html.php';
            }
        } catch (PDOException $e) {
            $_SESSION['ERROR'] = 'Failed to create a new account!';
            include __DIR__ . '/../public/new-user.html.php';
            // This has to match to an actual file location on your server
        }
    }
?>