<?php

if(isset($_POST["submit"])){
    $name = $_POST["nickname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    require_once 'DataBaseConnection.php';
    require_once 'Functions.inc.php';

    if(emptyInputSignup($name, $email, $password, $confirm_password) !== false){
        header("location: ../site/Registration.php?error=emptyinput");
        exit();
    }
    if(invalidUser($name) !== false){
        header("location: ../site/Registration.php?error=invalidUsername");
        exit();
    }
    if(invalidEmail($email) !== false){
        header("location: ../site/Registration.php?error=invalidEmail");
        exit();
    }
    if(passwordMatch($password, $confirm_password) !== false){
        header("location: ../site/Registration.php?error=passwordDoesNotMatch");
        exit();
    }
    if(usernameExists($conn, $name, $email) !== false){
        header("location: ../site/Registration.php?error=usernameTaken");
        exit();
    }
    

    createUser($conn, $name, $email, $password);

}else{
    header("location: ../site/Registration.php");
    exit();
}
