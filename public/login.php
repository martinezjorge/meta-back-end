<?php

    session_start();

    // Grab the credentials from the login box
    $user_email = $_POST['login_email'];
    $user_pass = $_POST['login_password'];

    // Sanity Check
    echo("<h1>This user email is " . $user_email . " and their password is " . $user_pass . ".</h1>");


    // First I need to grab all the emails in the database and all the passwords associated with those emails
    $conn = "mysql:host=localhost;dbname=scotchbox";

    try {

        $db = new PDO($conn, "root", "root");
        $sql = $db->prepare("SELECT `id`,`email`, `password` FROM scotchbox.users WHERE email = '" . $user_email . "'");
        $sql->execute();

        $row = $sql->fetch();
        $id = $row['id'];
        $email = $row['email'];
        $pass = $row['password'];

        if ($user_email == $email ){
            if (password_verify($user_pass, $pass)){
                $_SESSION['email'] = $user_email;
                $_SESSION['password'] = $user_pass;
                $_SESSION['id'] = $id;
                $_SESSION['logged_in'] = True;
                header('Location: /../existing-user.html.php');
            } else {
                echo("<h1>Email or password is incorrect</h1>");
                header('Location: /../new-user.html.php');
            }
        } else {
            echo("<h1>Email or password is incorrect</h1>");
            header('Location: /../new-user.html.php');
        }

    } catch(PDOException $e){
        $_SESSION['ERROR'] = 'Failed to query database!';
        header('Location: /../public/new-user.html.php');
    }

?>