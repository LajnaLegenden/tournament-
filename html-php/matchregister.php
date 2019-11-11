<?php
$link = mysqli_connect("localhost", "root", "", "tournament");
if (isset($_POST['submit'])) {
    $firstlag = $_POST['team1'];
    $secondlag = $_POST['team2'];
    $winnerlag = $_POST['result'];
    if (!isset($firstlag) || !isset($secondlag) || !isset($winnerlag) || empty($firstlag) || empty($secondlag) || empty($winnerlag) || $secondlag == $firstlag) {
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
    $wlag = "SELECT * FROM `lag` WHERE `Namn` = '$winnerlag'";
    $respans = mysqli_query($link, $wlag);
    $row = mysqli_fetch_assoc($respans);
    $winnerlagID = $row['ID'];
    //echo $winnerlagID;

    $sql = "INSERT INTO `match` (`firstlagID`, `secondlagID`, `result`) VALUES ('$firstlagID', '$secondlagID', '$winnerlagID')";
    mysqli_query($link, $sql);

    header('location: tournament.php');
    echo "Info added";
}
