<?php
if (isset($_POST["submit"])) {
    if ($_POST["rememberMe"] == "true") {
        setcookie("email", $_POST["email"], time() + (86400 * 30), "/");
        setcookie("passwordUser", $_POST["passwordUser"], time() + (86400 * 30), "/");
    }

    $email = $_POST["email"];
    $passwordUser = $_POST["passwordUser"];

    require_once "databaseconnect.php";
    require_once "functions.php";

    if (emptyInputLogin($email, $passwordUser !== false)) {
        header("location: ../signin.php?error=emptyinput");
        exit();
    }
    loginUser($dbc, $email, $passwordUser);
} else {
    header("location: ../signin.php");
    exit();
}
