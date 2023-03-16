<?php
function emptyInputSignup($name, $surname, $address, $postalCode, $city, $state, $contactNumber, $email, $passwordUser, $passwordRepeatUser)
{
    $result = false;
    if (empty($name) || empty($surname) || empty($address) || empty($postalCode) || empty($city) || empty($state) || empty($contactNumber) || empty($email) || empty($passwordUser) || empty($passwordRepeatUser)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function invalidPassword($passwordUser, $passwordRepeatUser)
{
    $result = false;
    if ($passwordUser !== $passwordRepeatUser) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
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
function createUser($dbc, $name, $surname, $address, $postalCode, $city, $state, $contactNumber, $email, $passwordUser, $status)
{
    $sql = "INSERT INTO users (name, surname, address, postalCode, city, state, contactNumber, email, passwordUser, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($dbc);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    $hashedPassword = password_hash($passwordUser, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sssisssssi", $name, $surname, $address, $postalCode, $city, $state, $contactNumber, $email, $hashedPassword, $status);
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
    $emailExists = emailExists($dbc, $email);
    if ($emailExists === false) {
        header("location: ../signin.php?error=wronglogin");
        exit();
    }
    $passwordHashed = $emailExists["passwordUser"];
    $checkPassword = password_verify($passwordUser, $passwordHashed);

    if ($checkPassword === false) {
        header("location: ../signin.php?error=wrongpassword");
        exit();
    } else if ($checkPassword === true) {
        session_start();
        $_SESSION["currentUserName"] = $emailExists["name"];
        $_SESSION["currentUserSurname"] = $emailExists["surname"];
        $_SESSION["currentUserAddress"] = $emailExists["address"];
        $_SESSION["currentUserPostalCode"] = $emailExists["postalCode"];
        $_SESSION["currentUserCity"] = $emailExists["city"];
        $_SESSION["currentUserState"] = $emailExists["state"];
        $_SESSION["currentUserContactNumber"] = $emailExists["contactNumber"];
        $_SESSION["currentUserEmail"] = $emailExists["email"];
        $_SESSION["currentUserStatus"] = $emailExists["status"];
        header("location: ../index.php");
        exit();
    }
}
