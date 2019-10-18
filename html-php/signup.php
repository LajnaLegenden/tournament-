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

    <title>Signup</title>
</head>

<body class="body">
    <header>
        <nav class="navbar">
            <img src="../imgs/logo.png" alt="logo" id="logo">
            <div id="log">
                <a class="loginbtn" href="login.php">Login</a>
                <a class="loginbtn" href="signup.php">Sign Up</a>
            </div>
        </nav>
    </header>

    <div class="loging">
        <form method="POST" class="login">
            <input class="signin" type="name" name="förnamn" placeholder="First name..." required>
            <input class="signin" type="name" name="efternamn" placeholder="Last name..." required>
            <input class="signin" type="name" name="username" placeholder="Username..." required>
            <input class="signin" type="email" name="email" placeholder="Email..." required>
            <input class="signin" type="password" name="password" placeholder="password..." required>
            <input class="signin" type="password" name="conformpassword" placeholder="Conform password..." required>
            <select id="conto-select">
                <option value="">--Please choose account type option--</option>
                <option value="captin">clan captin</option>
                <option value="player">clan player</option>
            </select>
            <input class="signin Btn" type="submit" value="signup" id="signup">
        </form>
    </div>
    <?php
    $link = mysqli_connect("localhost", "root", "", "tournament");

    // kolla ifall det gick bra eller åt helsike
    /*if ($link === false) {
        echo "Oh shit, something is wrong....";
        exit();
    }*/

    if (!isset($_POST['förnamn']) || !isset($_POST['efternamn']) || !isset($_POST['email']) || !isset($_POST['password']) || !isset($_POST['conformpassword'])) {
        echo "Need more data to signup";
        exit();
    }

    /*if ($_POST('password') !== $_POST('conformpassword')){
        echo "not password is not matching";
        exit();
    }*/

    $firstname = $_POST['förnamn'];
    $lastname = $_POST['efternamn'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "INSERT INTO spelare (firstname, lastname, username, email, pass) VALUES ('$firstname', '$lastname', '$username', '$email', '$password') ";

    if(mysqli_query($link, $sql))
        echo "<br>Info added";
  
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