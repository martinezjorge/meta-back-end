<html>
    <head>
        <style>
            body {
                background-color: #333;
            }
            .color {
                background-color: #eee;
            }
            .center {
                margin: auto;
                width: 25%;
                border: 3px solid #eee;
                text-align: center;
                font-family: Arial, sans-serif;
                padding: 5rem;
            }
            button {
                background-color: red; /* Green */
                border: none;
                color: white;
                padding: .75rem .75rem;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 1rem;
            }
        </style>
    </head>
    <body>
        <div class="center color">
            <?php 
            session_start();
                if ($_SESSION['SUCCESS_MESSAGE']) {
                    echo '<div><strong>'.$_SESSION['SUCCESS_MESSAGE'].'</strong></div></br>';
                    for ($i = 0; $i < 5; $i++) {
                        echo '<div>Sample Post</div>';
                    }
                }
            ?>
            <br>
            <form action="./logout.php" method="post">
                <button type="submit">Log Out</button>
            </form>
        </div>
    </body>
</html>