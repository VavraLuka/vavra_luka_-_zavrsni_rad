<?php
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $address = $_POST["address"];
    $postalCode = $_POST["postalCode"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $contactNumber = $_POST["contactNumber"];
    $email = $_POST["email"];
    $passwordUser = $_POST["passwordUser"];
    $passwordRepeatUser = $_POST["passwordRepeatUser"];
    $status = "user";

    require_once 'databaseconnect.php';
    require_once 'functions.php';

    if (emptyInputSignup($name, $surname, $address, $postalCode, $city, $state, $contactNumber, $email, $passwordUser, $passwordRepeatUser, $status) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidPassword($passwordUser, $passwordRepeatUser) !== false) {
        header("location: ../signup.php?error=invalidpassword");
        exit();
    }
    if (emailExists($dbc, $email) !== false) {
        header("location: ../signup.php?error=emailexists");
        exit();
    }
    createUser($dbc, $name, $surname, $address, $postalCode, $city, $state, $contactNumber, $email, $passwordUser, $status);
} else {
    header("location: ../signup.php");
    exit();
}
