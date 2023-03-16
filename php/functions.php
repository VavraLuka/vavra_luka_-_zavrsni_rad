<?php
function emptyInputSignup($name, $surname, $email, $passwordUser, $passwordrepeatUser, $contactNumber, $usernameUser)
{    
    $result = false;
    if (empty($name) || empty($surname) || empty($usernameUser) || empty($email) || empty($contactNumber) || empty($passwordUser) || empty($passwordrepeatUser)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function invalidUsername($usernameUser)
{
    $result = false;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $usernameUser)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function invalidPassword($passwordUser, $passwordrepeatUser)
{
    $result = false;
    if ($passwordUser !== $passwordrepeatUser) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function usernameExists($dbc, $usernameUser)
{
    $sql = "SELECT * FROM users WHERE username = ?;";
    $stmt = mysqli_stmt_init($dbc);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $usernameUser);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
function emailExists($dbc, $email)
{
    $sql = "SELECT * FROM users WHERE email = ?;";
    $stmt = mysqli_stmt_init($dbc);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
function createUser($dbc, $name, $surname, $email, $contactNumber, $usernameUser, $passwordUser)
{
    $sql = "INSERT INTO users (name, surname, email, contactNumber, username, password) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($dbc);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPassword = password_hash($passwordUser, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssssss", $name, $surname, $email, $contactNumber, $usernameUser, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
}
function emptyInputLogin($email, $passwordUser)
{
    $result = false;
    if (empty($email) || empty($passwordUser)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function loginUser($dbc, $email, $passwordUser)
{
    $usernameExists = usernameExists($dbc, $email);
    if ($usernameExists === false) {
        header("location: ../signin.php?error=wronglogin");
        exit();
    }
    $passwordHashed = $usernameExists["password"];
    $checkPassword = password_verify($passwordUser, $passwordHashed);

    if ($checkPassword === false) {
        header("location: ../signin.php?error=wrongpassword");
        exit();
    } else if ($checkPassword === true) {
        session_start();
        $_SESSION["currentUserName"] = $usernameExists["name"];
        $_SESSION["currentUserSurname"] = $usernameExists["surname"];
        $_SESSION["currentUserUsername"] = $usernameExists["username"];
        $_SESSION["currentUserMail"] = $usernameExists["mail"];
        $_SESSION["currentUserContactNumber"] = $usernameExists["contactNumber"];
        $_SESSION["currentUserStatus"] = $usernameExists["status"];
        header("location: ../index.php");
        exit();
    }
}