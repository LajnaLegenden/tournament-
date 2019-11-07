<?php
    $link = mysqli_connect("localhost", "root", "", "tournament");

    /*if (!isset($_SESSION["login_user"]) ) {
        header("location: login.php");
        exit;
    } else {*/
    if (isset($_POST['submit'])) {


        $username = $_POST['username'];
        $password = $_POST['password'];
        $hash = base64_encode($password);
        $sql = "SELECT * FROM `spelare` WHERE `username` = '$username' AND `pass` = '$hash' ";


        $result = mysqli_query($link, $sql);


        if (mysqli_num_rows($result) == true) {
            session_start();
            $_SESSION['login_user'] = $username;
            
            header('location: profil.php');
        } else {
            echo "Your Login Name or Password is invalid";
            header('location: error.html');
        }
    }
    //}
    

    ?>