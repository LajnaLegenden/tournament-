<?php
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
                <a class="loginbtn" href="Profil.php">
                    <?php
                    echo $_SESSION['login_user'];
                    ?></a>
                <a class="loginbtn" href="tournament.php">Tournament</a>
                <a class="loginbtn" href="lag.php">Team</a>
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

    ?>
    <form method="POST" class="editpro" action="editcode.php">
        <p class="editUser">Firstname</p>
        <input class="signin" type="text" name="firstName" placeholder="Firstname"> <br>
        <p class="editUser">Lastname</p>
        <input class="signin" type="text" name="lastname" placeholder="Lastname"> <br>
        <p class="editUser">Username</p>
        <?php echo "<input type='text' class='signin' value=" . $row['username'] . " </input> <br>"; ?>
        <p class="editUser">Email</p>
        <input class="signin" type="text" name="email" placeholder="Email">
        <input class="signin Btn" type="submit" value="submit" name="submit" id="Save edit">
    </form>

    <form method="POST" id="delete" action="delete.php">
        <input class="delete " type="submit" name="submit" value="Delete Acount!">
    </form>



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