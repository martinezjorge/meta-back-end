<?php
    session_start();

    // connect to the database
    $conn = "mysql:host=localhost;dbname=scotchbox";

    try {

        $db = new PDO($conn, "root", "root", [
            PDO::ATTR_PERSISTENT => true
            ]);

        // data to be sent to posts
        $post_data = [
            $_POST['title'],
            $_POST['body']
        ];



        echo("<h1>" . $_SESSION['id'] . "</h1>");
        echo("<h1>" . $_POST['title'] . "</h1>");
        echo("<h1>" . $_POST['body'] . "</h1>");


        // post might have to be posts
        $statement = $db->prepare("INSERT INTO `posts` (`title`, `body`) VALUES  (?,?);");
        
        if ( $statement->execute($post_data) ) {
            echo("<h1>Succesfully created post!</h1>");
        } else {
            echo("<h1>Creating post failed!</h1>");
        }

        // need to grab the post id
        $sql = $db->prepare("SELECT `id` FROM `users` WHERE title = '" . $_POST['title'] . "' AND body = '" . $_POST['body'] . "'");
        $sql->execute();
        $row = $sql->fetch();

        // data to be sent to post_users
        $post_user_data = [
            $_SESSION['id'],
            $row['id']
        ];

        $statement2 = $db->prepare("INSERT INTO `post_users` (`user_id`,`post_id`) VALUES (?,?);");
        if ( $statement2->execute($post_user_data) ) {
            echo("<h1>Succesfully created post_users row!!</h1>");
        } else {
            echo("<h1>Creating post users row failed!!</h1>");
        }

        header('Location: /../existing-user.html.php');
        
    } catch (PDOException $e) {
        $_SESSION['ERROR'] = 'Unable to render posts!';
        echo("Unable to render posts!");
        include __DIR__ . '/../public/existing-user.html.php';
        // This has to match to an actual file location on your server
    }
    
?>