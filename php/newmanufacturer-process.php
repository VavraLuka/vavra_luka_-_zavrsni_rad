<?php
if (isset($_POST["submit"])) {
    $manufacturer = $_POST["manufacturer"];
    $description = $_POST["description"];
    $imageURL = $_POST["imageURL"];

    require_once 'databaseconnect.php';

    $sql = "INSERT INTO manufacturers (manufacturer, description, imageURL) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($dbc);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Greška: SQL statement.";
    } else {
        mysqli_stmt_bind_param($stmt, "sss", $manufacturer, $description, $imageURL);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
    header("location: ../administration.php?manufactureruploaderror=none#manufacturerManagement");
}
mysqli_close($dbc);
