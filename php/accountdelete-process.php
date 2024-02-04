<?php
session_start();
if (isset($_POST['profileID'])) {
    $userId = $_POST['profileID'];
    $userEmail = $_POST['email'];

    $sql = "DELETE FROM users WHERE id = '$userId'";
    $result = mysqli_query($dbc, $sql);
    if ($result) {
        $sql = "DELETE FROM favorites WHERE email = '$userEmail'";
        $result = mysqli_query($dbc, $sql);
        if ($result) {
            session_unset();
            session_destroy();
            header("location: ../index.php?userdelete=success");
            exit;
        } else {
            echo "Greška prilikom brisanja liste omiljenih proizvoda iz baze podataka: " . mysqli_error($dbc);
        }
    } else {
        echo "Greška prilikom brisanja korisničkog računa iz baze podataka: " . mysqli_error($dbc);
    }
}
