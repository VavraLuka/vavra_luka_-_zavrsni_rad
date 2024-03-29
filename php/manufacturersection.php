<section id="manufacturerManagement">
    <div class="section-wrapper">
        <hr>
        <div class="two-elements">
            <div class="single-element-left">
                <h2>Uređivanje proizvođača u bazi podataka</h2>
                <?php
                include_once "php/databaseconnect.php";
                $sql = "SELECT id, manufacturer FROM manufacturers";
                if ($_SESSION['currentUserStatus'] == "admin") {
                    $currentControlPanel = "administration";
                } else if ($_SESSION['currentUserStatus'] == "coordinator") {
                    $currentControlPanel = "logistics";
                }
                $stmt = mysqli_prepare($dbc, $sql);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_bind_result($stmt, $id, $manufacturer);
                echo "<div class='product-table-div'><table class='product-edit'><thead>
                <tr>
                    <th>ID</th>
                    <th>Proizvođač</th>
                    <th style='text-align: right; padding-right: 16px;'>Uredi</th>
                </tr></thead><tbody>";
                while (mysqli_stmt_fetch($stmt)) {
                    echo "<tr>
                <td>{$id}</td>
                <td>{$manufacturer}</td>
                <td style='text-align: right; padding-right: 16px;'><a href='$currentControlPanel.php?manufacturerid={$id}#manufacturerManagement'>Uredi</a></td>
            </tr>";
                }
                echo "</tbody></table></div>";
                mysqli_stmt_close($stmt);
                ?><br>
                <form method="GET" action="<?php echo $currentControlPanel; ?>.php#manufacturerManagement">
                    <div class="form-button">
                        <input type="text" name="addmanufacturer" value="addmanufacturer" hidden>
                        <input type="submit" name="submit" value="Dodaj proizvođača">
                    </div>
                </form>
            </div>
            <div class="single-element-right">
                <?php
                if (isset($_GET['manufacturerediterror']) && $_GET['manufacturerediterror'] == "none") {
                    echo "<p>Proizvođač je uspješno ažuriran!</p>";
                }

                if (isset($_GET['manufacturerdelete']) && $_GET['manufacturerdelete'] == "success") {
                    echo "<p>Proizvođač je uspješno uklonjen iz baze podataka!</p>";
                }
                if (isset($_GET['manufactureruploaderror']) && $_GET['manufactureruploaderror'] == "none") {
                    echo "<p>Proizvođač je uspješno dodan u bazu podataka!</p>";
                }
                if (isset($_GET['manufacturerid'])) {
                    $id = $_GET['manufacturerid'];
                    $sql = "SELECT manufacturer, description FROM manufacturers WHERE id = ?";
                    $stmt = mysqli_prepare($dbc, $sql);
                    mysqli_stmt_bind_param($stmt, "i", $id);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_bind_result($stmt, $manufacturer, $description);
                    if (mysqli_stmt_fetch($stmt)) {
                        echo "<div style='display: flex; width: 100%; justify-content: space-between;'><h2 class='center-element'>Trenutno uređujete proizvođača: <span style='font-weight: 600; color: var(--main-blue-color);'>{$manufacturer}</span></h2><a href='$currentControlPanel.php#manufacturerManagement' class='clear-link'><img alt='Zatvaranje forme' class='close-icon' src='images/closeIcon.svg'></a></div>";
                        include_once "php/editmanufacturerform.php";
                    }
                    mysqli_stmt_close($stmt);
                }
                if (isset($_GET['addmanufacturer'])) {
                    echo "<div style='display: flex; width: 100%; justify-content: space-between;'>";
                    echo "<h2>Unosite novog proizvođača</h2>";
                    echo "<a href='$currentControlPanel.php#manufacturerManagement' class='clear-link'><img alt='Zatvaranje forme' class='close-icon' src='images/closeIcon.svg'></a>";
                    echo "</div>";
                    include_once "php/manufacturerupload-form.php";
                }
                ?>
            </div>
        </div>
    </div>
</section>
