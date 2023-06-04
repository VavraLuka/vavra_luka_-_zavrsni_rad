<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
function addProductId($favoritesList, $newProductId)
{
    $favoritesList = rtrim($favoritesList, ',');
    $existingIds = explode(',', $favoritesList);
    if (in_array($newProductId, $existingIds)) {
        return $favoritesList;
    }
    $existingIds[] = $newProductId;
    $favoritesList = implode(',', $existingIds);
    return $favoritesList;
}

if (isset($_POST['add_to_favorites'])) {
    $userEmail = $_POST['userEmail'];
    $productID = $_POST['productID'];
    $currentLocation = $_POST['currentLocation'];

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "vavra_luka_-_zavrsni_rad";

    $mysqli = new mysqli($hostname, $username, $password, $database);
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    $query = "SELECT * FROM favorites WHERE userEmail = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('s', $userEmail);
    $stmt->execute();
    $stmt->store_result();
    $rowCount = $stmt->num_rows;
    if ($rowCount > 0) {
        echo "Row with ID $userEmail exists in the table.";
        $conn = new mysqli($hostname, $username, $password, $database);
        $sql = "SELECT favoritesList FROM favorites WHERE userEmail = '$userEmail'";
        $result = mysqli_query($conn, $sql);
        if ($row = mysqli_fetch_assoc($result)) {
            $favoritesList = $row['favoritesList'];
        }
        $newProductIds = addProductId($favoritesList, $productID);
        $dbc = new mysqli($hostname, $username, $password, $database);
        $sql = "UPDATE favorites SET favoritesList = '$newProductIds' WHERE userEmail = '$userEmail'";
        if (mysqli_query($dbc, $sql)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_error($dbc);
        }
        mysqli_close($dbc);
        mysqli_close($conn);
    } else {
        echo "Row with ID $userEmail does not exist in the table.";
        $favoritesList = $productID . ",";
        $query = "INSERT INTO favorites (id, userEmail, favoritesList) VALUES (?, ?, ?)";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param('iss', $id, $userEmail, $favoritesList);
        $stmt->execute();
    }
    $stmt->close();
    $mysqli->close();
    header('location: ' . $currentLocation);
    exit;
}
