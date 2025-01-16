<?php
if (isset($_POST["submit"])) {

    $name = $_POST["nickname"];
    $password = $_POST["password"];

    require_once 'DataBaseConnection.php';
    require_once 'Functions.inc.php';


    if (emptyInputLogIn($name, $password) !== false) {
        header("location: ../site/LogIn.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $name, $password);
} else {
    header("location: ../site/LogIn.php");
    exit();
}
