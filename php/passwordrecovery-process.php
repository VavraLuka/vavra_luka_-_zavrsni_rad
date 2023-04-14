<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    include_once "databaseconnect.php";
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $dbc->query($sql);

    if ($result->num_rows > 0) {
        header("location: ../passwordrecovery.php?error=none");
    } else {
        header("location: ../passwordrecovery.php?error=emailNotStored");
    }
}
