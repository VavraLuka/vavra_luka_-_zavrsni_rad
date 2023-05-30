<?php
include_once "databaseconnect.php";
$id = $_POST["id"];
$name = $_POST["name"];
$surname = $_POST["surname"];
$address = $_POST["address"];
$postalCode = $_POST["postalCode"];
$contactNumber = $_POST["contactNumber"];
$email = $_POST["email"];

$sql = "UPDATE users SET name='$name', surname='$surname', address='$address', postalCode='$postalCode', contactNumber='$contactNumber', email='$email' WHERE id='$id'";
$result = mysqli_query($dbc, $sql);

if ($result) {
    header("location: ../myprofile.php?infoediterror=none");
} else {
    echo "Greška prilikom ažuriranja podataka proizvoda: " . mysqli_error($dbc);
}
mysqli_close($dbc);
