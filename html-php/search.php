

<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "tournament");
$username = $_SESSION['login_user'];
if (isset($_POST['submit'])) {
    if (!isset($_POST['clannamn']) || empty($_POST['clannamn'])) {
        echo "<h1> Please write the clanname above! </h1>";
    } else {
        $lagnamn = $_POST['clannamn'];
        $search = "SELECT * FROM `lag` WHERE `Namn` = '$lagnamn'";
        $respans = mysqli_query($link, $search);
        $row = mysqli_fetch_assoc($respans);
        if (mysqli_num_rows($respans) == true) {
            $lagnamn = $row['Namn'];
            $lagID = $row['ID'];
            echo "<h1 id='lagNamn'> Team: $lagnamn [" . $row['Tag'] . "]  </h1>";

            $result =  "SELECT * FROM `koppling` WHERE `lagID` = '$lagID'";
            $respans = mysqli_query($link, $result);
            $row = mysqli_fetch_assoc($respans);
            foreach ($respans as $row) {
                $spelarID = $row['spelarID'];
                $result =  "SELECT * FROM `spelare` WHERE `ID` = '$spelarID'";
                $respans = mysqli_query($link, $result);
                $row = mysqli_fetch_assoc($respans);
                $usernames = $row['username'];
                echo "<strong class='spelarNamn'>Username:</strong> " . $usernames  . "<br>";
            }
        } else {
            echo "clan does not exists!";
        }
    }
}
?>