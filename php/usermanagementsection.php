<!-- Users management -->
<section id="usersManagement">
    <div class="section-wrapper">
        <hr>
        <div class="two-elements">
            <div class="single-element-left">
                <h2>Upravljanje korisničkim računima iz baze podataka</h2>
                <?php
                include_once "php/databaseconnect.php";
                $sql = "SELECT id, name, surname FROM users";
                $stmt = mysqli_prepare($dbc, $sql);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_bind_result($stmt, $id, $userName, $userSurname);
                echo "<div class='user-table-div'><table class='user-edit'><thead>
                <tr>
                    <th>ID</th>
                    <th>Korisnik</th>
                    <th style='text-align: right; padding-right: 16px;'>Uredi</th>
                </tr></thead><tbody>";
                while (mysqli_stmt_fetch($stmt)) {
                    echo "<tr>
                <td>{$id}</td>
                <td>{$userName} {$userSurname}</td>
                <td style='text-align: right; padding-right: 16px;'><a href='administration.php?userid={$id}#usersManagement'>Uredi</a></td>
            </tr>";
                }
                echo "</tbody></table></div>";
                mysqli_stmt_close($stmt);
                ?>
            </div>
            <div class="single-element-right">
                <?php
                if (isset($_GET['userediterror']) && $_GET['userediterror'] == "none") {
                    echo "<p>Korisnički račun je uspješno ažuriran!</p>";
                }

                if (isset($_GET['userdelete']) && $_GET['userdelete'] == "success") {
                    echo "<p>Korisnički račun je uspješno uklonjen iz baze podataka!</p>";
                }
                if (isset($_GET['userid'])) {
                    $id = $_GET['userid'];
                    $sql = "SELECT name, surname, address, postalCode, city, state, contactNumber, email FROM users WHERE id = ?";
                    $stmt = mysqli_prepare($dbc, $sql);
                    mysqli_stmt_bind_param($stmt, "i", $id);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_bind_result($stmt, $name, $surname, $address, $postalCode, $city, $state, $contactNumber, $email);
                    if (mysqli_stmt_fetch($stmt)) {
                        echo "<div style='display: flex; width: 100%; justify-content: space-between;'><h2 class='center-element'>Trenutno uređujete korisnički račun: <span style='font-weight: 600; color: var(--main-blue-color);'>{$name} {$surname}</span></h2><a href='administration.php#usersManagement' class='clear-link'><img alt='Zatvaranje forme' class='close-icon' src='images/closeIcon.svg'></a></div>";
                        include_once "edituserform.php";
                    }
                    mysqli_stmt_close($stmt);
                }
                ?>
            </div>
        </div>
    </div>
</section>