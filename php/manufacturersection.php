<!-- Manufacturer management -->
<section id="manufacturerManagement">
    <div class="section-wrapper">
        <hr>
        <div class="two-elements">
            <div class="single-element-left">
                <h2>Uređivanje proizvođača u bazi podataka</h2>
                <?php
                include_once "php/databaseconnect.php";
                $sql = "SELECT id, manufacturer FROM manufacturers";
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
                <td style='text-align: right; padding-right: 16px;'><a href='administration.php?manufacturerid={$id}#manufacturerManagement'>Uredi</a></td>
            </tr>";
                }
                echo "</tbody></table></div>";
                mysqli_stmt_close($stmt);
                ?>
            </div>
            <div class="single-element-right">
                <?php
                if (isset($_GET['manufacturerediterror']) && $_GET['manufacturerediterror'] == "none") {
                    echo "<p>Proizvođač je uspješno ažuriran!</p>";
                }

                if (isset($_GET['manufacturerdelete']) && $_GET['manufacturerdelete'] == "success") {
                    echo "<p>Proizvođač je uspješno uklonjen iz baze podataka!</p>";
                }
                if (isset($_GET['manufacturerid'])) {
                    $id = $_GET['manufacturerid'];
                    $sql = "SELECT manufacturer, description FROM manufacturers WHERE id = ?";
                    $stmt = mysqli_prepare($dbc, $sql);
                    mysqli_stmt_bind_param($stmt, "i", $id);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_bind_result($stmt, $manufacturer, $description);
                    if (mysqli_stmt_fetch($stmt)) {
                        echo "<div style='display: flex; width: 100%; justify-content: space-between;'><h2 class='center-element'>Trenutno uređujete proizvođača: <span style='font-weight: 600; color: var(--main-blue-color);'>{$manufacturer}</span></h2><a href='administration.php#productManagement' class='clear-link'><img alt='Zatvaranje forme' class='close-icon' src='images/closeIcon.svg'></a></div>";
                        include_once "php/editmanufacturerform.php";
                    }
                    mysqli_stmt_close($stmt);
                }
                ?>
            </div>
        </div>
    </div>
</section>