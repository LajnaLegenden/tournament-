<?php 
include 'check.php';
include 'matchregister.php'; ?>
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
    <title>Tournament</title>
</head>

<body class="body">
    <header>
        <nav class="navbar">
            <img src="../imgs/logo.png" alt="logo" id="logo">
            <div id="log">
                <a class="loginbtn" href="Profil.php">
                    <?php
                    echo $_SESSION['login_user'];
                    ?></a>
                <a class="loginbtn" href="lag.php">Team</a>
            </div>
        </nav>
    </header>

    <div id="matchRegister">

        <form id="tournamentMatch" method="POST" class="register" action="matchregister.php">
            <h4 id="tournamentTeams">Home team:</h4>
            <input id="tournamentInput" type="name" name="team1" placeholder="Home team...">
            <h4 id="tournamentTeams">Away team:</h4>
            <input id="tournamentInput" type="name" name="team2" placeholder="Away team...">
            <h4 id="tournamentTeams">Home team score:</h4>
            <input id="tournamentInput" id="winnerBtn" type="name" name="firstresult" placeholder="Home team score..."> <br>
            <h4 id="tournamentTeams">Away team score:</h4>
            <input id="tournamentInput" id="winnerBtn" type="name" name="scondresult" placeholder="Away team score..."> <br>
            <input id="matchBtn" type="submit" name="submit" value="Submit">
        </form>

    </div>
    <?php
    $link = mysqli_connect("localhost", "root", "", "tournament");

    ?>


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