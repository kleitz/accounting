<?php
    session_start();
    unset($_SESSION['session_accountname']);
    session_destroy();

    header("location: /IT3AHCTS/login.php");
?>