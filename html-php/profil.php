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
                <a class="loginbtn" href="Profil.php"><i class="fas fa-user"></i>User</a>
                <a class="loginbtn" href="">Tournament</a>
            </div>

        </nav>
    </header>

    <?php 

    // skapa ett handle till databasen genom att skapa en anslutning
    $link = mysqli_connect("localhost", "root", "", "tournament");

    // kolla ifall det gick bra eller åt helsike
    if($link === false) 
    {
        echo "Oh shit, something is wrong....";
        exit();
    }

    $sql = "SELECT * FROM spelare";
 

    $response = mysqli_query($link, $sql);

    foreach ($response as $row) {

        echo "<div id='profilPicDiv'>" . "<img id='profilPic' src=''>" . "</div>";

        echo "<div id='profilDescription'>" . "<h1 id='headerDescription'>" . $row['username'] . "</h1>" . "<p>" .$row["firstname"] . " " . $row["lastname"] . " ". $row["email"]."</p>" . "</div>";
    
    }

    /*
    $link = mysqli_connect("localhost", "root", "", "spelare");

    if ($link === false)
    {
        echo "Oh shit, something is wrong...";
        exit();
    }

    else
        echo "Oh, nice, we own the database now. <br>";

    if(!isset($_GET['firstname']) || !isset($_GET['lastname']))
        {
            echo "Need more data in order to add an author";
            exit();
        }

    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];

    if($firstname == "" || $lastname=="")
    {
        echo "Noname authors (firstname, lastname) VALUES ('$firstname', '$lastname')";
    }*/
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
            <p>©Copyrighted by: Akkadian E-sport 2019</p>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <script src="../js/header.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/footer.js"></script>
</body>

</html>