<?php
session_start();
include_once "databaseconnect.php";

if (isset($_POST['submit'])) {
    if (isset($_POST['product_ID'])) {
        $userEmail = $_POST['currentUserEmail'];
        $product_ID = $_POST['product_ID'];

        $query = "SELECT favoritesList FROM favorites WHERE userEmail = '$userEmail'";
        $result = mysqli_query($dbc, $query);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $existingString = $row['favoritesList'];
        } else {
            die("Error retrieving existing string: " . mysqli_error($dbc));
        }

        $idsArray = explode(",", $existingString);
        $updatedIdsArray = array_diff($idsArray, [$product_ID]);
        $updatedString = implode(",", $updatedIdsArray);

        $query = "UPDATE favorites SET favoritesList = '$updatedString' WHERE userEmail = '$userEmail'";
        $updateResult = mysqli_query($dbc, $query);
        if ($updateResult) {
            echo "String updated successfully!";
        } else {
            die("Error updating string: " . mysqli_error($dbc));
        }
        mysqli_close($dbc);
    }
}
header("location: ../myprofile.php#profileFavorites");
