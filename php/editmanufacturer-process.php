<?php
include_once "databaseconnect.php";

$id = $_POST["id"];
$manufacturer = $_POST["manufacturer"];
$description = $_POST["description"];
$imageURL = $_POST["imageURL"];

$sql = "UPDATE manufacturers SET manufacturer='$manufacturer', description='$description', imageURL='$imageURL' WHERE id='$id'";
$result = mysqli_query($dbc, $sql);

if ($result) {
    header("location: ../administration.php?manufacturerediterror=none#manufacturerManagement");
} else {
    echo "Greška prilikom ažuriranja podataka proizvoda: " . mysqli_error($dbc);
}
mysqli_close($dbc);
