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
            <h4>Firstname:</h4>
            <input class="signin" type="name" name="firstname" placeholder="First name...">
            <h4>Lastname:</h4>
            <input class="signin" type="name" name="efternamn" placeholder="Last name...">
            <h4>Username:</h4>
            <input class="signin" type="name" name="username" placeholder="Username...">
            <h4>Email:</h4>
            <input class="signin" type="email" name="email" placeholder="Email...">
            <h4>Password:</h4>
            <input class="signin" type="password" name="password" placeholder="Password...">
            <h4>confirmpassword:</h4>
            <input class="signin" type="password" name="confirmpassword" placeholder="Confirm password...">

            <input class="signin Btn" type="submit" value="signup" id="Signup">
        </form>
    </div>
    <?php
    $link = mysqli_connect("localhost", "root", "", "tournament");




    if (empty($_POST['firstname']) || empty($_POST['efternamn']) || empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirmpassword'])) {
        echo "Please write your information";
    } else {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['efternamn'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirmpassword'];

        $sql = "SELECT * FROM `spelare` WHERE `username` = '$username'";


        $result = mysqli_query($link, $sql);


        if (mysqli_num_rows($result) == true) {
            echo "username is already taken";
            exit;
        } else if ($password != $confirm_password) {
            echo "Password did not match";
            exit;
        } else $sql = "INSERT INTO spelare (firstname, lastname, username, email, pass) VALUES ('$firstname', '$lastname', '$username', '$email', '$password') ";

        if (mysqli_query($link, $sql)) {
            echo "<br>Info added";
            header("location: login.php");
        }
    }

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