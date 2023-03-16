<?php
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $passwordUser = $_POST["passwordUser"];
    $passwordrepeatUser = $_POST["passwordrepeatUser"];
    $contactNumber = $_POST["contactNumber"];
    $usernameUser = $_POST["usernameUser"];

    require_once 'databaseconnect.php';
    require_once 'functions.php';

    if (emptyInputSignup($name, $surname, $email, $passwordUser, $passwordrepeatUser, $contactNumber, $usernameUser) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUsername($usernameUser) !== false) {
        header("location: ../signup.php?error=invalidusername");
        exit();
    }
    if (invalidPassword($passwordUser, $passwordrepeatUser) !== false) {
        header("location: ../signup.php?error=invalidpassword");
        exit();
    }
    if (usernameExists($dbc, $usernameUser) !== false) {
        header("location: ../signup.php?error=usernameexists");
        exit();
    }
    if (emailExists($dbc, $email) !== false) {
        header("location: ../signup.php?error=emailexists");
        exit();
    }

    createUser($dbc, $name, $surname, $email, $passwordUser, $contactNumber, $usernameUser);
} else {
    header("location: ../signup.php");
    exit();
}
