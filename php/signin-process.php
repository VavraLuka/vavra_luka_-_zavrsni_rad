<?php
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $passwordUser = $_POST["passwordUser"];

    require_once 'databaseconnect.php';
    require_once 'functions.php';

    if (emptyInputLogin($email, $passwordUser !== false)) {
        header("location: ../signin.php?error=emptyinput");
        exit();
    }
    loginUser($dbc, $email, $passwordUser);
} else {
    header("location: ../signin.php");
    exit();
}