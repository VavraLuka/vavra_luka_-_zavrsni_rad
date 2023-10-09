<?php
include_once "databaseconnect.php";
$id = isset($_POST['id']) ? $_POST['id'] : NULL;
$name = isset($_POST['name']) ? $_POST['name'] : NULL;
$surname = isset($_POST['surname']) ? $_POST['surname'] : NULL;
$address = isset($_POST['address']) ? $_POST['address'] : NULL;
$postalCode = isset($_POST['postalCode']) ? $_POST['postalCode'] : NULL;
$city = isset($_POST['city']) ? $_POST['city'] : NULL;
$state = isset($_POST['state']) ? $_POST['state'] : NULL;
$contactNumber = isset($_POST['contactNumber']) ? $_POST['contactNumber'] : NULL;
$email = isset($_POST['email']) ? $_POST['email'] : NULL;
$status = isset($_POST['status']) ? $_POST['status'] : NULL;

$sql = "UPDATE users SET name=?, surname=?, address=?, postalCode=?, city=?, state=?, contactNumber=?, email=?, status=? WHERE id=?";
$stmt = mysqli_prepare($dbc, $sql);
if ($stmt) {
    mysqli_stmt_bind_param($stmt, "sssssssssi", $name, $surname, $address, $postalCode, $city, $state, $contactNumber, $email, $status, $id);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt) > 0) {
        header("location: ../administration.php?userediterror=none#usersManagement");
    } else {
        echo $id;
        echo $name;
        echo $surname;
        echo "Podatci nisu uspješno spremljeni.";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Greška: " . mysqli_error($dbc);
}
mysqli_close($dbc);
