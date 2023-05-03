<?php
include_once "databaseconnect.php";
$productId = $_POST['productId'];

$sql = "DELETE FROM products WHERE id = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $productId);

if (!$stmt->execute()) {
    header("Location: ../administration.php?productdelete=fail");
} else {
    header("Location: ../administration.php?productdelete=success");
}

$stmt->close();
$mysqli->close();
