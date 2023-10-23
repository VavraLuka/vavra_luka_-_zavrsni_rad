<?php
include_once "databaseconnect.php";


$defaultValues = array(
    "category" => NULL,
    "name" => NULL,
    "manufacturer" => NULL,
    "price" => NULL,
    "quantity" => NULL,
    "speakerType" => NULL,
    "drivers" => NULL,
    "RMS" => NULL,
    "maxPower" => NULL,
    "soundPressure" => NULL,
    "minFrequency" => NULL,
    "maxFrequency" => NULL,
    "dimensions" => NULL,
    "weight" => NULL,
    "imageURL1" => NULL,
    "imageURL2" => NULL,
    "imageURL3" => NULL,
    "salesCount" => 0,
    "faders" => NULL,
    "inputs" => NULL,
    "outputs" => NULL,
    "cableType" => NULL,
    "length" => NULL,
    "leftJack" => NULL,
    "leftJackType" => NULL,
    "rightJack" => NULL,
    "rightJackType" => NULL,
    "externalPowerSource" => NULL,
    "color" => NULL,
    "limiter" => NULL,
    "channels" => NULL,
    "power" => NULL,
    "lightSource" => NULL,
    "powerConsumption" => NULL,
    "lightType" => NULL,
    "beamAngle" => NULL,
    "discount" => 0,
    "caseFor" => NULL,
    "caseType" => NULL,
    "accessoryType" => NULL,
    "description" => NULL,
    "additionalLine1" => NULL,
    "additionalLineValue1" => NULL,
    "additionalLine2" => NULL,
    "additionalLineValue2" => NULL,
    "additionalLine3" => NULL,
    "additionalLineValue3" => NULL,
    "softwareSupport" => NULL,
    "deckNumber" => NULL,
);

$id = $_POST["id"];
foreach ($defaultValues as $key => $defaultValue) {
    ${$key} = isset($_POST[$key]) ? $_POST[$key] : $defaultValue;
}

$sql = "UPDATE products SET category='$category', name='$name', manufacturer='$manufacturer', price='$price', quantity='$quantity', speakerType='$speakerType', drivers='$drivers', RMS='$RMS', maxPower='$maxPower', soundPressure='$soundPressure', minFrequency='$minFrequency', maxFrequency='$maxFrequency', dimensions='$dimensions', weight='$weight', imageURL1='$imageURL1', imageURL2='$imageURL2', imageURL3='$imageURL3', salesCount='$salesCount', faders='$faders', inputs='$inputs', outputs='$outputs', cableType='$cableType', length='$length', leftJack='$leftJack', leftJackType='$leftJackType', rightJack='$rightJack', rightJackType='$rightJackType', color='$color', limiter='$limiter', channels='$channels', power='$power', lightSource='$lightSource', powerConsumption='$powerConsumption', lightType='$lightType', beamAngle='$beamAngle', discount='$discount', caseFor='$caseFor', caseType='$caseType', accessoryType='$accessoryType', description='$description', additionalLine1='$additionalLine1', additionalLineValue1='$additionalLineValue1', additionalLine2='$additionalLine2', additionalLineValue2='$additionalLineValue2', additionalLine3='$additionalLine3', additionalLineValue3='$additionalLineValue3', softwareSupport='$softwareSupport', deckNumber='$deckNumber', externalPowerSource='$externalPowerSource' WHERE id='$id'";
$result = mysqli_query($dbc, $sql);

if ($result) {
    header("location: ../administration.php?productediterror=none#productManagement");
} else {
    echo "Greška prilikom ažuriranja podataka proizvoda: " . mysqli_error($dbc);
}
mysqli_close($dbc);
