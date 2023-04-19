<?php
echo "<table class='product-specifications'>";
echo "<tr>
    <td>Proizvod</td>
    <td>{$name}</td>
</tr>
<tr>
    <td>Proizvođač</td>
    <td>{$manufacturer}</td>
</tr>";

if (isset($speakerType)) {
    $productCategory = $speakerType;
} else {
    $productCategory = $category;
}

switch ($category) {
    case "speakers":
        $speakerTypes = array(
            "activeSpeaker" => "Aktivni zvučnik",
            "passiveSpeaker" => "Pasivni zvučnik",
            "monitorSpeaker" => "Monitorski zvučnik",
            "speakerBundle" => "Komplet zvučnika",
        );
        echo "<tr><td>Vrsta zvučnika</td><td>$speakerTypes[$speakerType]</td></tr>
        <tr><td>Driver-i</td><td>$drivers</td></tr>
        <tr><td>RMS (radna snaga)</td><td>$RMS</td></tr>
        <tr><td>Maksimalna snaga</td><td>$maxPower</td></tr>
        <tr><td>Maksimalna glasnoća</td><td>$soundPressure</td></tr>
        <tr><td>Minimalna frekvencija</td><td>$minFrequency Hz</td></tr>
        <tr><td>Maksimalna frekvencija</td><td>$maxFrequency Hz</td></tr>
        <tr><td>Dimenzije</td><td>$dimensions mm</td></tr>
        <tr><td>Težina</td><td>$weight kg</td></tr>";
        break;
    case "amplifiers":
        echo "<tr><td>Sadrži limiter</td><td>$limiter</td></tr>
        <tr><td>Broj kanala</td><td>$channels</td></tr>
        <tr><td>Snaga</td><td>$power</td></tr>
        <tr><td>Minimalna frekvencija</td><td>$minFrequency Hz</td></tr>
        <tr><td>Maksimalna frekvencija</td><td>$maxFrequency Hz</td></tr>
        <tr><td>Dimenzije</td><td>$dimensions mm</td></tr>
        <tr><td>Težina</td><td>$weight kg</td></tr>";
        break;
    case "mixers":
        echo "<tr><td>Broj potenciometara</td><td>$faders</td></tr>
        <tr><td>Broj ulaza</td><td>$inputs</td></tr>
        <tr><td>Broj izlaza</td><td>$outputs</td></tr>
        <tr><td>Minimalna frekvencija</td><td>$minFrequency Hz</td></tr>
        <tr><td>Maksimalna frekvencija</td><td>$maxFrequency Hz</td></tr>
        <tr><td>Dimenzije</td><td>$dimensions mm</td></tr>
        <tr><td>Težina</td><td>$weight kg</td></tr>";
        break;
    case "controllers":
        echo "<tr><td>Podržani software</td><td>$softwareSupport</td></tr>
        <tr><td>Broj deck-ova</td><td>$deckNumber</td></tr>";
        echo "<tr><td>Vanjsko napajanje</td><td>$externalPowerSource</td></tr>
        <tr><td>Minimalna frekvencija</td><td>$minFrequency Hz</td></tr>
        <tr><td>Maksimalna frekvencija</td><td>$maxFrequency Hz</td></tr>
        <tr><td>Dimenzije</td><td>$dimensions mm</td></tr>
        <tr><td>Težina</td><td>$weight kg</td></tr>";
        break;
    case "light":
        $lightTypes = array(
            "movingHeadSpot" => "Moving Head - Spot",
            "movingHeadBeam" => "Moving Head - Beam",
            "movingHeadBWash" => "Moving Head - Wash",
            "LEDPar" => "LED Par",
        );
        echo "<tr><td>Vrsta osvjetljenja</td><td>$lightTypes[$lightType]</td></tr>
        <tr><td>Izvor svjetla</td><td>$lightSource</td></tr>
        <tr><td>Kut svjetlosti</td><td>$beamAngle</td></tr>
        <tr><td>Potrošnja energije</td><td>$powerConsumption W</td></tr>
        <tr><td>Dimenzije</td><td>$dimensions mm</td></tr>
        <tr><td>Težina</td><td>$weight kg</td></tr>";
        break;
    case "cables":
        $cableTypes = array(
            "instrumentCable" => "Kabel za instrumente",
            "microphoneCable" => "Mikrofonski kabel",
            "speakerCable" => "Speaker kabel",
            "audioCable" => "Signalni kabel",
            "midiCable" => "MIDI kabel",
            "dmxCable" => "DMX kabel",
            "powerCable" => "Napojni kabel",
            "extendCable" => "Produžni kabel",
        );
        echo "<tr><td>Vrsta kabla</td><td>$cableTypes[$cableType]</td></tr>
        <tr><td>Dužina</td><td>$length cm</td></tr>
        <tr><td>Boja</td><td>$color</td></tr>
        <tr><td>Konektor (lijevi kraj)</td><td>$leftJack ";
        if ($leftJackType == "male") {
            echo "muški";
        } else {
            echo "ženski";
        }
        echo "</td></tr>";
        echo "<tr><td>Konektor (desni kraj)</td><td>$rightJack ";
        if ($rightJackType == "male") {
            echo "muški";
        } else {
            echo "ženski";
        }
        echo "</td></tr>";
        break;
    case "adapters":
        echo "<tr><td>Dužina</td><td>$length cm</td></tr>
        <tr><td>Boja</td><td>$color</td></tr>
        <tr><td>Konektor (lijevi kraj)</td><td>$leftJack ";
        if ($leftJackType == "male") {
            echo "muški";
        } else {
            echo "ženski";
        }
        echo "</td></tr>";
        echo "<tr><td>Konektor (desni kraj)</td><td>$rightJack ";
        if ($rightJackType == "male") {
            echo "muški";
        } else {
            echo "ženski";
        }
        echo "</td></tr>";
        break;
    case "accessories":
        $accesoryTypes = array(
            "stands" => "Stalak",
            "headphones" => "Slušalice",
            "storageUnits" => "Mediji za pohranu",
            "other" => "Ostalo",
        );
        echo "<tr><td>Vrsta dodatne opreme</td><td>$accesoryTypes[$accessoryType]</td></tr>";
        break;
    case "covers":
        $caseTypes = array(
            "flightCases" => "Flight cases",
            "casesAndBags" => "Torbe i kutije",
            "covers" => "Presvlake",
        );
        echo "<tr><td>Vrsta dodatne opreme</td><td>$caseTypes[$caseType]</td></tr>";
        echo "<tr><td>Namijenjeno za</td><td>$caseFor</td></tr>";
        break;
};

for ($i = 1; $i <= 3; $i++) {
    $additionalLine = "additionalLine$i";
    $additionalLineValue = "additionalLineValue$i";
    if (isset($$additionalLineValue)) {
        echo "<tr>
      <td>${$additionalLine}</td>
      <td>${$additionalLineValue}</td>
      </tr>";
    }
}
echo "</table>";
