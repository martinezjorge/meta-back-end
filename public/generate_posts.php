<?php

    // The goal here is to render all the posts in the database

    session_start();

    // connect to the database
    $conn = "mysql:host=localhost;dbname=scotchbox";
    try {
        $db = new PDO($conn, "root", "root", [
            PDO::ATTR_PERSISTENT => true
            ]);

        // Here we grab all the posts in the data base
        $posts = $db->query("SELECT * FROM posts;");

        // If for some reason the person who created the post is not longer in the database
        $author = "Deleted User!";

        // Each row in the db is a post
        while( $post = $posts->fetch() ){
            // Now we're getting all the users with their id
            $id_query = $db->query("SELECT * FROM users;");
            // We cross reference all the user's id with the current row id to get the post creator's first name
            while($user = $id_query->fetch()){
                // if the post's id is equal to the user's id then we have found the name of the creator of the post
                if ($user['id'] == $post['id']){
                    // so we get the author's name
                    $author = $user['fname'];
                    // break out early if possible
                    break;
                }
            }

            echo('<div class="post_style">');

                // Here we post the name of the author above the title and body
                echo('<strong>User:</strong>' . $author . '<br>');

                // Here we output the title
                echo($post['title'] . '<br>'); 
                
                // Here the body
                echo ($post['body'] . '<br>');

            echo("</div>");
        }
        
    } catch (PDOException $e) {
        $_SESSION['ERROR'] = 'Unable to render posts!';
        echo("Unable to render posts!");
        include __DIR__ . '/../public/existing-user.html.php';
        // This has to match to an actual file location on your server
    }

?>