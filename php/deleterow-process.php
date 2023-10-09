<?php
if (isset($_POST['submit'])) {
    include_once "databaseconnect.php";
    if (isset($_POST['productId'])) {
        $productId = $_POST['productId'];
        $sql = "DELETE FROM products WHERE id = '$productId'";
        $result = mysqli_query($dbc, $sql);
        if ($result) {
            header("location: ../administration.php?productdelete=success");
        } else {
            echo "Greška prilikom brisanja proizvoda iz baze podataka: " . mysqli_error($dbc);
        }
    }
    if (isset($_POST['userId'])) {
        $userId = $_POST['userId'];
        $sql = "DELETE FROM users WHERE id = '$userId'";
        $result = mysqli_query($dbc, $sql);
        if ($result) {
            header("location: ../administration.php?userdelete=success");
        } else {
            echo "Greška prilikom brisanja korisničkog računa iz baze podataka: " . mysqli_error($dbc);
        }
    }
    if (isset($_POST['manufacturerId'])) {
        $manufacturerId = $_POST['manufacturerId'];
        $sql = "DELETE FROM manufacturers WHERE id = '$manufacturerId'";
        $result = mysqli_query($dbc, $sql);
        if ($result) {
            header("location: ../administration.php?manufacturerdelete=success");
        } else {
            echo "Greška prilikom brisanja proizvođača iz baze podataka: " . mysqli_error($dbc);
        }
    }
    mysqli_close($dbc);
}
