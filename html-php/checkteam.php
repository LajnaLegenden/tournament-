<?php

$link = mysqli_connect("localhost", "root", "", "tournament");
$username = $_SESSION['login_user'];

$result =  "SELECT * FROM `spelare` WHERE `username` = '$username'";
$respans = mysqli_query($link, $result);
$row = mysqli_fetch_assoc($respans);
$userid = $row['ID'];


$result =  "SELECT * FROM `koppling` WHERE `spelarID` = '$userid'";
$respans = mysqli_query($link, $result);
$row = mysqli_fetch_assoc($respans);
$lagID = $row['lagID'];
if (isset($lagID)) {
    header('location: lag.php');
    exit;
}else{
    //header('location: lag.php');
}