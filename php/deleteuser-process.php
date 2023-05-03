<?php
include_once "databaseconnect.php";
$userId = $_POST['userId'];

$sql = "DELETE FROM users WHERE id = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $userId);

if (!$stmt->execute()) {
    header("Location: ../administration.php?userdelete=fail");
} else {
    header("Location: ../administration.php?userdelete=success");
}

$stmt->close();
$mysqli->close();
