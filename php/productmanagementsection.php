<!-- Product management -->
<section id="productManagement">
    <div class="section-wrapper">
        <hr>
        <div class="two-elements">
            <div class="single-element-left">
                <h2>Uređivanje proizvoda u bazi podataka</h2>
                <?php
                include_once "php/databaseconnect.php";
                $sql = "SELECT id, manufacturer, name FROM products";
                $stmt = mysqli_prepare($dbc, $sql);
                if($_SESSION['currentUserStatus'] == "admin"){
                    $currentControlPanel = "administration";
                } else if ($_SESSION['currentUserStatus'] == "coordinator"){
                    $currentControlPanel = "logistics";
                }
                mysqli_stmt_execute($stmt);
                mysqli_stmt_bind_result($stmt, $id, $manufacturer, $productName);
                echo "<div class='product-table-div'><table class='product-edit'><thead>
                <tr>
                    <th>ID</th>
                    <th>Proizvod</th>
                    <th style='text-align: right; padding-right: 16px;'>Uredi</th>
                </tr></thead><tbody>";
                while (mysqli_stmt_fetch($stmt)) {
                    echo "<tr>
                <td>{$id}</td>
                <td>{$manufacturer} {$productName}</td>
                <td style='text-align: right; padding-right: 16px;'><a href='$currentControlPanel.php?productid={$id}#productManagement'>Uredi</a></td>
            </tr>";
                }
                echo "</tbody></table></div>";
                mysqli_stmt_close($stmt);
                ?>
            </div>
            <div class="single-element-right">
                <?php
                if (isset($_GET['productediterror']) && $_GET['productediterror'] == "none") {
                    echo "<p>Proizvod je uspješno ažuriran!</p>";
                }

                if (isset($_GET['productdelete']) && $_GET['productdelete'] == "success") {
                    echo "<p>Proizvod je uspješno uklonjen iz baze podataka!</p>";
                }
                if (isset($_GET['productid'])) {
                    $id = $_GET['productid'];
                    $sql = "SELECT category, name, manufacturer, price, quantity, speakerType, drivers, RMS, maxPower, soundPressure, maxFrequency, minFrequency, dimensions, weight, imageURL, salesCount, faders, inputs, outputs, cableType, length, leftJack, leftJackType, rightJack, rightJackType, color, limiter, channels, power, lightSource, powerConsumption, lightType, beamAngle, discount, caseFor, caseType, accessoryType, description, additionalLine1, additionalLineValue1, additionalLine2, additionalLineValue2, additionalLine3, additionalLineValue3, review, reviewCount, softwareSupport, deckNumber, externalPowerSource FROM products WHERE id = ?";
                    $stmt = mysqli_prepare($dbc, $sql);
                    mysqli_stmt_bind_param($stmt, "i", $id);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_bind_result($stmt, $category, $name, $manufacturer, $price, $quantity, $speakerType, $drivers, $RMS, $maxPower, $soundPressure, $maxFrequency, $minFrequency, $dimensions, $weight, $imageURL, $salesCount, $faders, $inputs, $outputs, $cableType, $length, $leftJack, $leftJackType, $rightJack, $rightJackType, $color, $limiter, $channels, $power, $lightSource, $powerConsumption, $lightType, $beamAngle, $discount, $caseFor, $caseType, $accessoryType, $description, $additionalLine1, $additionalLineValue1, $additionalLine2, $additionalLineValue2, $additionalLine3, $additionalLineValue3, $review, $reviewCount, $softwareSupport, $deckNumber, $externalPowerSource);
                    if (mysqli_stmt_fetch($stmt)) {
                        echo "<div style='display: flex; width: 100%; justify-content: space-between;'><h2 class='center-element'>Trenutno uređujete proizvod: <span style='font-weight: 600; color: var(--main-blue-color);'>{$manufacturer} {$name}</span></h2><a href='$currentControlPanel.php#productManagement' class='clear-link'><img alt='Zatvaranje forme' class='close-icon' src='images/closeIcon.svg'></a></div>";
                        $includeProductForm = "php/productedit-forms/{$category}.php";
                        include_once $includeProductForm;
                    }
                    mysqli_stmt_close($stmt);
                }
                ?>
            </div>
        </div>
    </div>
</section>