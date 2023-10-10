<?php
if (isset($_POST["submit"])) {
    $name = isset($_POST["name"]) ? $_POST["name"] : NULL;
    $email = isset($_POST["email"]) ? $_POST["email"] : NULL;
    $date = isset($_POST["date"]) ? $_POST["date"] : NULL;
    $time = isset($_POST["time"]) ? $_POST["time"] : NULL;
    $message = isset($_POST["message"]) ? $_POST["message"] : NULL;
    $product = isset($_POST["product"]) ? $_POST["product"] : NULL;
    $submit_date = date('Y-m-d');
    $submit_time = date('H:i:s');

    require_once 'databaseconnect.php';

    $sql = "INSERT INTO messages (name, email, date, time, message, product) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($dbc);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Greška: SQL statement.";
    } else {
        mysqli_stmt_bind_param($stmt, "sssssi", $name, $email, $submit_date, $submit_time, $message, $product);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
    header("location: ../help.php?submiterror=none#contactForm");
}
mysqli_close($dbc);
