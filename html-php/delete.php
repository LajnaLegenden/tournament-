<?php 
session_start();
$link = mysqli_connect("localhost", "root", "", "tournament");
$username = $_SESSION['login_user'];

$result =  "DELETE  FROM `spelare` WHERE `username` = '$username'";
mysqli_query($link,$result);
header('location: index.html');
?>