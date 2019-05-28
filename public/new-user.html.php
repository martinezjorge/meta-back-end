<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="/css/new-user.html.css" rel="stylesheet" type="text/css" >
        <title>Meat Labs Inc.</title>
    </head>
    <body>
        <div class = "content">
            <?php 
                /* for some reason this was giving me errors
                session_start();
                    if ($_SESSION['ERROR']) {
                        echo '<div>'.$_SESSION['ERROR'].'</div>';
                        unset($_SESSION['ERROR']);
                    }
                    if ($_SESSION['LOG_OUT']) {
                        echo '<div><strong>'.$_SESSION['LOG_OUT'].'</strong></div></br>';
                        unset($_SESSION['LOG_OUT']);
                    }
                */
            ?>

            <div class="header"> 
                Welcome to Meat Lab Inc's Forum 
            </div>

            <nav>
                <ul>
                    <li>Home</li>
                    <li>Forums</li>
                </ul>
            </nav>

            <header> Log in or Register to enter the forums! </header>

            <aside class="center color floatleft">
                    <strong>Log In Here!</strong><br><br>
                    <form action="/../login.php" method="post">
                        <strong>E-mail:</strong> <input type="text" name="login_email"><br><br>
                        <strong>Password:</strong> <input type="password" name="login_password"><br><br>
                        <button type="submit">Login</button>
                    </form>
            </aside>

            <aside class="center color floatright">
                    <strong>Register Here!</strong><br><br>
                    <form action="/../register.php" method="post">
                        <strong>First Name:</strong> <input type="text" name="r_fname"><br><br>
                        <strong>Last Name:</strong> <input type="text" name="r_lname"><br><br>
                        <strong>Username:</strong> <input type="text" name="r_username"><br><br>
                        <strong>Password:</strong> <input type="password" name="r_password"><br><br>
                        <strong>E-mail:</strong> <input type="text" name="r_email"><br><br>
                        <button type="submit">Submit</button>
                    </form>
            </aside>


            <footer>
                Footer Stuff
            </footer>

        </div>

    </body>
</html>