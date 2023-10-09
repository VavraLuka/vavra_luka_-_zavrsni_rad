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
    $minFrequency = isset($_POST["minFrequency"]) ? $_POST["minFrequency"] : NULL;
    $maxFrequency = isset($_POST["maxFrequency"]) ? $_POST["maxFrequency"] : NULL;
    $dimensions = isset($_POST["dimensions"]) ? $_POST["dimensions"] : NULL;
    $weight = isset($_POST["weight"]) ? $_POST["weight"] : NULL;
    $imageURL = isset($_POST["imageURL"]) ? $_POST["imageURL"] : NULL;
    $salesCount = isset($_POST["salesCount"]) ? $_POST["salesCount"] : 0;
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
    $lightSource = isset($_POST['lightSource']) ? $_POST['lightSource'] : NULL;
    $powerConsumption = isset($_POST['powerConsumption']) ? $_POST['powerConsumption'] : NULL;
    $lightType = isset($_POST['lightType']) ? $_POST['lightType'] : NULL;
    $beamAngle = isset($_POST['beamAngle']) ? $_POST['beamAngle'] : NULL;
    $discount = isset($_POST['discount']) ? $_POST['discount'] : 0;
    $caseFor = isset($_POST['caseFor']) ? $_POST['caseFor'] : NULL;
    $caseType = isset($_POST['caseType']) ? $_POST['caseType'] : NULL;
    $accessoryType = isset($_POST['accessoryType']) ? $_POST['accessoryType'] : NULL;
    $description = isset($_POST['description']) ? $_POST['description'] : NULL;
    $additionalLine1 = isset($_POST['additionalLine1']) ? $_POST['additionalLine1'] : NULL;
    $additionalLineValue1 = isset($_POST['additionalLineValue1']) ? $_POST['additionalLineValue1'] : NULL;
    $additionalLine2 = isset($_POST['additionalLine2']) ? $_POST['additionalLine2'] : NULL;
    $additionalLineValue2 = isset($_POST['additionalLineValue2']) ? $_POST['additionalLineValue2'] : NULL;
    $additionalLine3 = isset($_POST['additionalLine3']) ? $_POST['additionalLine3'] : NULL;
    $additionalLineValue3 = isset($_POST['additionalLineValue3']) ? $_POST['additionalLineValue3'] : NULL;
    $softwareSupport = isset($_POST['softwareSupport']) ? $_POST['softwareSupport'] : NULL;
    $deckNumber = isset($_POST['deckNumber']) ? $_POST['deckNumber'] : NULL;
    $externalPowerSource = isset($_POST['externalPowerSource']) ? $_POST['externalPowerSource'] : NULL;

    require_once 'databaseconnect.php';

    $sql = "INSERT INTO products (category, name, manufacturer, price, quantity, speakerType, drivers, RMS, maxPower, soundPressure, minFrequency, maxFrequency, dimensions, weight, imageURL, salesCount, faders, inputs, outputs, cableType, length, leftJack, leftJackType, rightJack, rightJackType, color, limiter, channels, power, lightSource, powerConsumption, lightType, beamAngle, discount, caseFor, caseType, accessoryType, description, additionalLine1, additionalLineValue1, additionalLine2, additionalLineValue2, additionalLine3, additionalLineValue3, softwareSupport, deckNumber, externalPowerSource) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($dbc);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Greška: SQL statement.";
    } else {
        mysqli_stmt_bind_param($stmt, "sssdissiiiiisdsiiiisdssssssiisississsssssssssis", $category, $name, $manufacturer, $price, $quantity, $speakerType, $drivers, $RMS, $maxPower, $soundPressure, $minFrequency, $maxFrequency, $dimensions, $weight, $imageURL, $salesCount, $faders, $inputs, $outputs, $cableType, $length, $leftJack, $leftJackType, $rightJack, $rightJackType, $color, $limiter, $channels, $power, $lightSource, $powerConsumption, $lightType, $beamAngle, $discount, $caseFor, $caseType, $accessoryType, $description, $additionalLine1, $additionalLineValue1, $additionalLine2, $additionalLineValue2, $additionalLine3, $additionalLineValue3, $softwareSupport, $deckNumber, $externalPowerSource);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
    header("location: ../administration.php?uploaderror=none#productUpload");
}
mysqli_close($dbc);
