<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Guru Reviews / Registration</title>
    <link rel="icon" href="Logo images/logo.png">
    <link rel="stylesheet" href="../CSS/Registration.css">
    <link rel="stylesheet" href="CSS/reset.css">
</head>

<body>
    <div id="wrapper">
        <a href="index.html">
            <img src="../Images/Logo images/logo.png" alt="Game Guru Reviews Logo">
        </a>
        <h1>
            <b>
                Log In
            </b>
        </h1>
        <form action="../Includes/LogIn.Inc.php" method="post">
            <div class="ns">
                <input type="text" name="nickname" placeholder="Nickname/Email">
            </div>
            <div class="ns">
                <input type="email" name="email" placeholder="Password">
            </div>
            <button id="submitBtn" type="submit" name="submit">Log In</button>
        </form>
    </div>
    
</body>

</html>