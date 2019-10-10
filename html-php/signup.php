<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <img src="../imgs/logo.png" alt="logo" id="logo">
            <div id="log">
                <a href="login.php">Login</a>
                <a href="signup.php">Sign Up</a>
            </div>
        </nav>
    </header>

    <form method="POST">
        <input type="name" name="förnamn" placeholder="First name...">
        <input type="name" name="efternamn" placeholder="Last name...">
        <input type="name" name="username" placeholder="Username...">
        <input type="email" name="email" placeholder="Email...">
        <input type="password" name="password" placeholder="password...">
        <input type="password" name="conformpassword" placeholder="Conform password...">
        <select id="conto-select">
            <option value="">--Please choose account type option--</option>
            <option value="captin">clan captin</option>
            <option value="player">clan player</option>
        </select>
        <input type="submit" value="signup" id="signup">
    </form>
    <?php


    ?>
    <script src="../js/header.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/footer.js"></script>
</body>

</html>