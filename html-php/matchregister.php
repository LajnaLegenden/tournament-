<?php
$link = mysqli_connect("localhost", "root", "", "tournament");
if (isset($_POST['submit'])) {
    $firstlag = $_POST['team1'];
    $secondlag = $_POST['team2'];
    $firstlagscore = $_POST['firstresult'];
    $secondlagscore = $_POST['scondresult'];
    if (!isset($firstlag) || !isset($secondlag)   || empty($firstlag) || empty($secondlag) || empty($firstlagscore)  || empty($secondlagscore)|| $secondlag == $firstlag) {
        header('location: error.html');
        exit;
    }
    $flag =  "SELECT * FROM `lag` WHERE `Namn` = '$firstlag'";
    $respans = mysqli_query($link, $flag);
    $row = mysqli_fetch_assoc($respans);
    $firstlagID = $row['ID'];
    //echo "$firstlagID";
    $slag = "SELECT * FROM `lag` WHERE `Namn` = '$secondlag'";
    $respans = mysqli_query($link, $slag);
    $row = mysqli_fetch_assoc($respans);
    $secondlagID = $row['ID'];
    //echo $secondlagID;
    

    $sql = "INSERT INTO `match` (`firstlagID`, `secondlagID`, `firstlagscore`, `secondlagscore`) VALUES ('$firstlagID', '$secondlagID', '$firstlagscore', '$secondlagscore' )";
    mysqli_query($link, $sql);

    header('location: tournament.php');
    echo "Info added";
}
