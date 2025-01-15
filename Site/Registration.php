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
        <a href="MainPage.php">
            <img src="../Images/Logo images/logo.png" alt="Game Guru Reviews Logo">
        </a>
        <h1>
            <b>
                Register
            </b>
        </h1>
        <form action="../Includes/SignUp.Inc.php" method="post">
            <div class="ns">
                <input type="text" name="nickname" placeholder="Nickname">
            </div>
            <div class="ns">
                <input type="email" name="email" placeholder="Email">
            </div>
            <div class="ns">
                <input type="password" name="password" placeholder="Enter Password" id="password">
            </div>
            <div class="ns">
                <input type="password" name="confirm_password" placeholder="Repeat Password" id="confirm-password">
            </div>
            <button id="submitBtn" type="submit" name="submit" onclick="ConfirmPassword()">Register</button>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill In All Fields!</p>";
                } else if ($_GET["error"] == "invalidUsername") {
                    echo "<p>Chose A Proper Username!</p>";
                } else if ($_GET["error"] == "invalidEmail") {
                    echo "<p>Chose A Proper Email!</p>";
                } else if ($_GET["error"] == "passwordDoesNotMatch") {
                    echo "<p>Password Does Not Match!</p>";
                } else if ($_GET["error"] == "stmtFailed") {
                    echo "<p>Something Went Wrong, Try Again!</p>";
                } else if ($_GET["error"] == "usernameTaken") {
                    echo "<p>Username Aleady Taken!</p>";
                } else if ($_GET["error"] == "none") {
                    echo "<p>You have Successfully Registered!</p>";
                }
            }
            ?>
        </form>
    </div>
    <script src="JavaScript/script.js"></script>
</body>

</html>