<?php
    session_start();
    $_SESSION['LOG_OUT'] = 'You have successfully logged out!';
    session_destroy();
    header('Location: /../new-user.html.php');
?>