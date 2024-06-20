<?php
include("connection.php");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="form">
        <h1 id="heading">signUp Form</h1><br>
        <form name="form" action="signup.php" method="POST">
            <i class="fa-solid fa-user"></i>
            <input type="text" placeholder="Enter your name" id="user" name="user" required><br><br>
            <i class="fa-solid fa-envelope"></i>
            <input type="email" placeholder="Enter your email" id="email" name="user" required><br><br>
            <i class="fa-solid fa-key"></i>
            <input type="password" placeholder="Create password" id="pass" name="pass" required><br><br>
            <i class="fa-solid fa-lock"></i>
            <input type="password" placeholder="Retype Password" id="cuser" name="cpass" required><br><br>
            <input type="submit" id="btn" value="signup" placeholder="submit">

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>