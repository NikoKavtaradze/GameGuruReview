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

function usernameExists($conn, $name, $email){
    $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../site/Registration.php?error=stmtFailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $name, $email);
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

    header("location: ../site/Registration.php?error=stmtFailed");
    exit();
}