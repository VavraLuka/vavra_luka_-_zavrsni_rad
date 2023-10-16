<?php
include_once "databaseconnect.php";

if (isset($_POST['change-status'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];
    if ($status == "unread") {
        $newStatus = "read";
    } else {
        $newStatus = "unread";
    }

    $sql = "UPDATE messages SET status='$newStatus' WHERE id='$id'";
    $result = mysqli_query($dbc, $sql);

    if ($result) {
        header("Location: ../administration.php#messageCenter");
        exit;
    } else {
        echo "Greška prilikom ažuriranja statusa upita: " . mysqli_error($dbc);
    }
    mysqli_close($dbc);
}