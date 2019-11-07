<?php include 'db.php';
include 'check.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Profil</title>
</head>

<body class="body">
    <header>
        <nav class="navbar">
            <img src="../imgs/logo.png" alt="logo" id="logo">
            <div id="log">
                <a class="loginbtn" href="out.php">Logout</a>
                <a class="loginbtn" href="tournament.php">Tournament</a>
                <a class="loginbtn" href="lag.php">Clan</a>
            </div>

        </nav>
    </header>
    <!---<form action="upload.php" method="post" enctype="multipart/form-data">
        <h4> image to upload:</h4>
        <input type="file" name="image"/>
        <input type="submit" name="submit" value="UPLOAD"/>
    </form>-->



    <?php
    // skapa ett handle till databasen genom att skapa en anslutning
    $link = mysqli_connect("localhost", "root", "", "tournament");
    if ($link === false) {
        echo "Something is wrong...";
        header('location: error.html');
        exit();
    }



    $username = $_SESSION['login_user'];

    $result =  "SELECT * FROM `spelare` WHERE `username` = '$username'";
    $respans = mysqli_query($link, $result);
    $row = mysqli_fetch_assoc($respans);
    $userid = $row['ID'];
 
    $res =  "SELECT * FROM `koppling` WHERE `spelarID` = '$userid'";
    $resp = mysqli_query($link, $res);
    $ro = mysqli_fetch_assoc($resp);
    $lagID = $ro['lagID'];

    $re =  "SELECT * FROM `lag` WHERE `ID` = '$lagID'";
    $respa = mysqli_query($link, $re);
    $r = mysqli_fetch_assoc($respa);
    $lagnamn = $r['Tag'];
   echo "<div class='info'>
            <tr>
                <td class='infotable'>
            	    <strong>First Name:</strong> " . $row['firstname']  ." [". $lagnamn."] <br>
            	    <strong>Last Name:</strong> " . $row['lastname'] . "<br>
            	    <strong>Username:</strong> " . $row['username'] . "<br>
            	    <strong>E-mail:</strong> " . $row['email'] . "<br>
                </td>
            </tr>
         </div>";

    ?>

<div id="imgBox">

    <?php

    if (isset($row['image'])) {
        echo '<img class="userimg" src="data:image/jpeg;base64,' . base64_encode($row['image']) . '"/>';
    }

    ?>

    <form method="POST" class="register" action="edit.php">
        <input class="signin Btn" id="changePicBtn" type="submit" name="submit" value="Edit Profile">
    </form>

</div>

    <!-- Footer -->
    <footer class="page-footer font-small teal pt-4">

        <!-- Footer Text -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                    <!-- Content -->
                    <h5 class="text-uppercase font-weight-bold">admininfo</h5>
                    <p>Oliver Jam - <a href="
                        https://discordapp.com/users/176736575302926336" class="discord">DAT BOI#9599</a></p>
                    <p>Mohammed Ali Al-Hilo -
                        <a href="
                    https://discordapp.com/users/246718596556783617" class="discord"> Ali.M #3531</a></p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-6 mb-md-0 mb-3">

                    <!-- Content -->
                    <h5 class="text-uppercase font-weight-bold">Contact</h5>
                    <p>oliver.jam@elev.ga.ntig.se</p>
                    <p>mohammedali.al-hilo@elev.ga.ntig.se</p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Text -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">
            <p>©Copyrighted by: <a href="https://discord.gg/SDQ6Dxp" class="discord">Akkadian E-sport 2019</a></p>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <script src="../js/header.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/footer.js"></script>
</body>

</html>