<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "tournament");
$username = $_SESSION['login_user'];
if (isset($_POST['submit'])) {

    $result =  "SELECT * FROM `spelare` WHERE `username` = '$username'";
    $respans = mysqli_query($link, $result);
    $row = mysqli_fetch_assoc($respans);
    $userid = $row['ID'];


    $result =  "DELETE  FROM `koppling` WHERE `spelarID` = '$userid'";
    mysqli_query($link, $result);
    header('location: profil.php');
    exit;
}
