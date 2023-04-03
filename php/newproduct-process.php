<?php
if (isset($_POST["submit"])) {
    $category = isset($_POST["category"]) ? $_POST["category"] : NULL;
    $name = isset($_POST["name"]) ? $_POST["name"] : NULL;
    $manufacturer = isset($_POST["manufacturer"]) ? $_POST["manufacturer"] : NULL;
    $price = isset($_POST["price"]) ? $_POST["price"] : NULL;
    $quantity = isset($_POST["quantity"]) ? $_POST["quantity"] : NULL;
    $speakerType = isset($_POST["speakerType"]) ? $_POST["speakerType"] : NULL;
    $drivers = isset($_POST["drivers"]) ? $_POST["drivers"] : NULL;
    $RMS = isset($_POST["RMS"]) ? $_POST["RMS"] : NULL;
    $maxPower = isset($_POST["maxPower"]) ? $_POST["maxPower"] : NULL;
    $soundPressure = isset($_POST["soundPressure"]) ? $_POST["soundPressure"] : NULL;
    $minFrequency = isset($_POST["maxFrequency"]) ? $_POST["maxFrequency"] : NULL;
    $maxFrequency = isset($_POST["maxFrequency"]) ? $_POST["minFrequency"] : NULL;
    $dimensions = isset($_POST["dimensions"]) ? $_POST["dimensions"] : NULL;
    $weight = isset($_POST["weight"]) ? $_POST["weight"] : NULL;
    $imageURL = isset($_POST["imageURL"]) ? $_POST["imageURL"] : NULL;
    $salesNumber = isset($_POST["salesNumber"]) ? $_POST["salesNumber"] : NULL;
    $faders = isset($_POST["faders"]) ? $_POST["faders"] : NULL;
    $inputs = isset($_POST["inputs"]) ? $_POST["inputs"] : NULL;
    $outputs = isset($_POST["outputs"]) ? $_POST["outputs"] : NULL;
    $cableType = isset($_POST["cableType"]) ? $_POST["cableType"] : NULL;
    $length = isset($_POST["length"]) ? $_POST["length"] : NULL;
    $leftJack = isset($_POST["leftJack"]) ? $_POST["leftJack"] : NULL;
    $leftJackType = isset($_POST["leftJackType"]) ? $_POST["leftJackType"] : NULL;
    $rightJack = isset($_POST["rightJack"]) ? $_POST["rightJack"] : NULL;
    $rightJackType = isset($_POST["rightJackType"]) ? $_POST["rightJackType"] : NULL;
    $color = isset($_POST["color"]) ? $_POST["color"] : NULL;
    $limiter = isset($_POST["limiter"]) ? $_POST["limiter"] : NULL;
    $channels = isset($_POST["channels"]) ? $_POST["channels"] : NULL;
    $power = isset($_POST["power"]) ? $_POST["power"] : NULL;

    include_once 'databaseconnect.php';

    $sql = "INSERT INTO products (category, name, manufacturer, price, quantity, speakerType, drivers, RMS, maxPower, soundPressure, minFrequency, maxFrequency, dimensions, weight, imageURL, salesNumber, faders, inputs, outputs, cableType, length, leftJack, leftJackType, rightJack, rightJackType, color, limiter, channels, power) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($dbc);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Greška: SQL statement.";
    } else {
        mysqli_stmt_bind_param($stmt, "sssiissiiiiisdsiiiisdssssssii", $category, $name, $manufacturer, $price, $quantity, $speakerType, $drivers, $RMS, $maxPower, $soundPressure, $minFrequency, $maxFrequency, $dimensions, $weight, $imageURL, $salesNumber, $faders, $inputs, $outputs, $cableType, $length, $leftJack, $leftJackType, $rightJack, $rightJackType, $color, $limiter, $channels, $power);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
    header("location: ../administration.php?error=none");
}
