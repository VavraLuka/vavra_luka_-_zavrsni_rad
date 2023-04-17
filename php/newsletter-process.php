<?php
require_once 'databaseconnect.php';
function emailExists($dbc, $email)
{
    $sql = "SELECT * FROM newsletter WHERE email = ?;";
    $stmt = mysqli_stmt_init($dbc);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=stmtfailed#newsletter");
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
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    if (emailExists($dbc, $email) !== false) {
        header("location: ../index.php?newsletter=emailexists#newsletter");
        exit();
    } else {
        $sql = "INSERT INTO newsletter (email) VALUES (?);";
        $stmt = mysqli_stmt_init($dbc);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "Greška: SQL statement.";
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
        header("location: ../index.php?newsletter=success#newsletter");
    }
}
