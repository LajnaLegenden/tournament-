<?php
$link = mysqli_connect("localhost", "root", "", "tournament");
if (isset($_POST['submit'])) {
    $firstlag = $_POST['team1'];
    $secondlag = $_POST['team2'];

    $flag =  "SELECT * FROM `lag` WHERE `Namn` = '$firstlag'";
    $respans = mysqli_query($link, $flag);
    $row = mysqli_fetch_assoc($respans);
    $firstlagID = $row['ID']; 

    $slag = "SELECT * FROM `lag` WHERE `Namn` = '$secondlag";
    $rs = mysqli_query($link, $slag);
    $row = mysqli_fetch_assoc($rs);
    $secondlagID = $row['ID'];

}
