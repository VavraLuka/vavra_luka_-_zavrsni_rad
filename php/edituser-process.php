<?php
include_once "databaseconnect.php";
$id = $_POST["id"];
$name = isset($_POST['name']) ? $_POST['name'] : NULL;
$surname = isset($_POST['surname']) ? $_POST['surname'] : NULL;
$address = isset($_POST['address']) ? $_POST['address'] : NULL;
$postalCode = isset($_POST['postalCode']) ? $_POST['postalCode'] : NULL;
$city = isset($_POST['city']) ? $_POST['city'] : NULL;
$state = isset($_POST['state']) ? $_POST['state'] : NULL;
$contactNumber = isset($_POST['contactNumber']) ? $_POST['contactNumber'] : NULL;
$email = isset($_POST['email']) ? $_POST['email'] : NULL;
$status = isset($_POST['status']) ? $_POST['status'] : NULL;

$sql = "UPDATE users SET name='$name', surname='$surname', address='$address', postalCode='$postalCode', city='$city', state='$state', contactNumber='$contactNumber', email='$email', status='$status' WHERE id='$id'";
$result = mysqli_query($dbc, $sql);

if ($result) {
    header("location: ../administration.php?userediterror=none#userManagement");
} else {
    echo "Greška prilikom ažuriranja podataka korisničkog računa: " . mysqli_error($dbc);
}
mysqli_close($dbc);
