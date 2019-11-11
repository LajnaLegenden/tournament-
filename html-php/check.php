<?php
    session_start();

    $link = mysqli_connect("localhost", "root", "", "tournament");
    if (!isset($_SESSION["login_user"]) ) {
        header("location: login.php");
        exit;
    }
