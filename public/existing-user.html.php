<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <link href="/css/existing-user.html.css" rel="stylesheet" type="text/css" >
        <link href="/css/generate_posts.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Meatlab's Forum</title>
    </head>

    <body>

        <header>

            <h1>Welcome to Meatlab's Forum</h1>

            <nav class="block">
                <ul>
                    <li>Home</li>
                    <li>Forums</li>
                    <li>Account</li>
                </ul>
            </nav>

            <div class="block">

                <form action="/../logout.php" method="post">
                    <button type="submit">Logout</button>
                </form>

            </div>

        </header>



        <div class="main">


            <h1>Meatlab's Forums</h1>

            <?php
                include __DIR__ . '/../public/generate_posts.php';
            ?>

            <div class="inline_block">
                <form action="/../create_post.php" method="post">

                    <div class="block">
                        <strong>Title:</strong>
                        <input class="title" type="text" name="title">
                    </div>

                    <div class="block">
                        <input class="large" type="text" name="body">
                    </div>

                    <div class="inline_block">
                        <button type="submit">Create Post</button>
                    </div>
                
                </form>
            </div>  

        </div>

        <footer>

        </footer>

    </body>

</html>