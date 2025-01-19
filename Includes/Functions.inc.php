<?php
function emptyInputSignup($name, $email, $password, $confirm_password){
    $result;
    if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}
function invalidUser($name) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}


function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function passwordMatch($password, $confirm_password){
    $result;
    if ($password !== $confirm_password) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function usernameExists($conn, $name){
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../site/Registration.php?error=stmtFailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $name);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row =mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $password){
    $sql = "INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../site/Registration.php?error=stmtFailed");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../site/index.php?status=SuccessfulyRegistered");
    exit();
}

function emptyInputLogIn($name, $password){
    $result;
    if (empty($name) || empty($password)) {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}
function LoginUser($conn, $name, $password){
    $userExists = usernameExists($conn, $name);
    if ($userExists === false) {
        header("location: ../site/Login.php?error=userNotFound");
        exit();
    }

    $passwordHashed = $userExists['password_hash'];
    $checkPassword = password_verify($password, $passwordHashed);

    if ($checkPassword === false) {
        header("location: ../site/Login.php?error=wrongPassword");
        exit();
    } else if ($checkPassword === true) {
        session_start();
        $_SESSION['userID'] = $userExists['user_id'];
        $_SESSION['username'] = $userExists['username'];

        header("location: ../site/index.php?status=LoggedIn");
        exit();
    }
}

