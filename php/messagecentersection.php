<section id="messageCenter">
    <div class="section-wrapper">
        <hr>
        <h2 style="margin-top: 24px; font-size: 24px; font-weight: 500; text-align: left;">Upiti korisnika</h2>
        <div style="text-align: left;">
            <?php
            include_once "php/databaseconnect.php";
            $sql = "SELECT * FROM messages ORDER BY date DESC";
            $result = mysqli_query($dbc, $sql);
            echo "<div class='user-table-div'>
                        <table class='user-edit'>
                        <thead>
                            <tr>
                                <th style='width: 2%; max-width: 2%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;'>ID</th>
                                <th style='width: 6%; max-width: 6%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;'>Ime</th>
                                <th style='width: 16%; max-width: 16%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;'>Email adresa</th>
                                <th style='width: 7%; max-width: 7%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;'>Datum</th>
                                <th style='width: 6%; max-width: 6%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;'>Vrijeme</th>
                                <th style='width: 50%; max-width: 50%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;'>Poruka</th>
                                <th style='width: 5%; max-width: 5%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;'>Proizvod</th>
                                <th style='width: 3%; max-width: 3%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;'>Status</th>
                                <th style='width: 3%; max-width: 3%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;'>Obriši</th>
                            </tr>
                        </thead>
                        <tbody>";
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $status = $row['status'];
                if ($status == "unread") {
                    $statuscolor = "#F8FCFF";
                } else {
                    $statuscolor = "transparent";
                }
                echo "<tr style='background-color: $statuscolor;'>
                            <td style='vertical-align: top;'>{$row['id']}</td>
                            <td style='vertical-align: top;'>{$row['name']}</td>
                            <td style='vertical-align: top;'>{$row['email']}</td>
                            <td style='vertical-align: top;'>{$row['date']}</td>
                            <td style='vertical-align: top;'>{$row['time']}</td>
                            <td style='vertical-align: top;'>{$row['message']}</td>
                            <td style='vertical-align: top;'>{$row['product']}</td>";
                if ($status == "unread") {
                    echo "<td style='vertical-align: top; text-align: center;'>
                                <form style='width: 36px; display: inline-block; margin-right: 12px;' method='post' action='php/message-process.php'>
                                <input type='hidden' name='id' value='$id'>
                                <input type='hidden' name='status' value='$status'>
                            <button style='all: unset;' type='submit' name='change-status'>
                                <img class='action-buttons' alt='Nepročitana obavijest' src='images/unreadIcon.png' width='32'></button>
                                </form>
                                </td>";
                } else {
                    echo "<td style='vertical-align: top; text-align: center;'>
                    <form style='width: 36px; display: inline-block; margin-right: 12px;' method='post' action='php/message-process.php'>
                    <input type='hidden' name='id' value='$id'>
                    <input type='hidden' name='status' value='$status'>
                <button style='all: unset;' type='submit' name='change-status'>
                    <img class='action-buttons' alt='Pročitana obavijest' src='images/readIcon.png' width='32'></button>
                    </form>
                    </td>";
                }
                echo "<td style='vertical-align: top; text-align: center;'><form onsubmit='return confirmSubmit();' style='width: 36px; display: inline-block; margin-right: 12px;' method='post' action='php/deleterow-process.php'>
                <input type='hidden' name='messageId' value='$id'>
            <button onclick='deleteMessage()' style='all: unset;' type='submit' name='submit'><img alt='Obriši' class='close-icon' src='images/closeIcon.svg' width='24'></button>
                </form></td> 
                        </tr>";
            }
            echo "</tbody></table></div>";
            ?>
        </div>
    </div>
    <script>
        function confirmSubmit() {
            var confirmed = confirm("Jeste li sigurni da želite obrisati upit korisnika? Upit će biti trajno izbrisan iz baze podataka.");
            if (confirmed) {
                confirmed = confirm("Potvrdite brisanje upita.");
                return confirmed;
            }
            return false;
        }
    </script>
</section>