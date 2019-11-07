<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "tournament");
$username = $_SESSION['login_user'];
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    if (empty($firstname) || empty($lastname) || empty($email) || !isset($firstname) || !isset($lastname) || !isset($email)) {
        echo "Please write your information";
        exit;
    } else {
        $update = "UPDATE `spelare` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email' WHERE `username` = '$username' ";
        mysqli_query($link, $update);
        header('location: profil.php');
    }
}
