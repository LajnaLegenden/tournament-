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
        <input type="name" name="username" placeholder="Username...">
        <input type="password" name="password">
        <input type="submit" value="Login" id="loginBtn">
    </form>
    <?php
        

    ?>
    <script src="../js/header.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/footer.js"></script>
</body>

</html>