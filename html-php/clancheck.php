<?php
 session_start();

 $link = mysqli_connect("localhost", "root", "", "tournament");
 $username = $_SESSION['login_user'];

    $result =  "SELECT * FROM `spelare` WHERE `username` = '$username'";
    $respans = mysqli_query($link,$result);
    $row = mysqli_fetch_assoc($respans);
    $userid = $row['ID'];


    $result =  "SELECT * FROM `koppling` WHERE `spelarID` = '$userid'";
    $respans = mysqli_query($link,$result);
    $row = mysqli_fetch_assoc($respans);
    $lagID = $row['lagID'];
    if(!isset($lagID)){
        header('location: noteam.php');
        exit;
    }