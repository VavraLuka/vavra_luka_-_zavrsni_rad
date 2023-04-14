<?php
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    require_once 'databaseconnect.php';

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
