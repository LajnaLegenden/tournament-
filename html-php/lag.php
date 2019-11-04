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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/solid.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/fontawesome.css">
    <title>Lag</title>
</head>

<body class="body">
    <header>
        <nav class="navbar">
            <img src="../imgs/logo.png" alt="logo" id="logo">
            <div id="log">
                <a class="loginbtn" href="Profil.php"><i class="fas fa-user"></i>User</a>
                <a class="loginbtn" href="tournament.php">Tournament</a>
            </div>

        </nav>
    </header>
    <div class="laglogo">
        <img src="" alt="">
    </div>
    <h1 class="lagnamn"></h1>
    <div class="lagstatistic"></div>


    <?php

    $link = mysqli_connect("localhost", "root", "", "tournament");
    /*$lag = "SELECT lag.namn  FROM lag, koppling, spelare WHERE koppling.lagID = lag.ID  AND spelarID = koppling.spelarID";
    $resultat = mysqli_query($link, $lag);

    foreach ($resultat as $row){
    //echo "<div class='laglogo'>" . $row['logo'] . "</div>";
    echo "<h1 class='lagnamn'>" .$row['namn']. "</h1>";}*/
    $sql = "SELECT spelare.username FROM spelare, koppling, lag WHERE spelarID = koppling.spelarID AND koppling.lagID = lag.ID";

    $response = mysqli_query($link, $sql);


    foreach ($response as $row) {
        echo "<div class='lagspelare'>" . "<ul>" . "<li class='lagcaptin>" . 'C ' . $row['username'] . "</li>" . "</ul>" . "</div>";
    }

    ?>


    <!--https://color.adobe.com/sv/search?q=tournament-->

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