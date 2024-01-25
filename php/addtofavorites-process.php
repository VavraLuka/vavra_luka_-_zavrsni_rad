<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function addProductId($favoritesList, $newProductId)
{
    $existingIds = explode(',', $favoritesList);

    if (in_array($newProductId, $existingIds)) {
        return $favoritesList;
    }

    $existingIds[] = $newProductId;
    $favoritesList = implode(',', $existingIds);

    if (count($existingIds) === 1) {
        $favoritesList = trim($favoritesList, ',');
    }

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
        die("Neuspjelo spajanje na bazu podataka: " . $mysqli->connect_error);
    }

    $query = "SELECT * FROM favorites WHERE userEmail = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('s', $userEmail);
    $stmt->execute();
    $stmt->store_result();
    $rowCount = $stmt->num_rows;

    if ($rowCount > 0) {
        echo "Zapis s ID-ijem $userEmail postoji u bazi podataka.";
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
            echo "Zapis uspješno ažuriran.";
        } else {
            echo "Zapis nije ažuriran: " . mysqli_error($dbc);
        }

        mysqli_close($dbc);
        mysqli_close($conn);
    } else {
        echo "Zapis s ID-ijem $userEmail ne postoji u bazi podataka.";
        $favoritesList = $productID;
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