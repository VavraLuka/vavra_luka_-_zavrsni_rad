<section id="messageCenter">
    <div class="section-wrapper">
        <hr>
        <div class="two-elements">
            <div class="single-element-left" style="flex-basis: 14%">
                <h2>Upiti korisnika</h2>
            </div>
            <div style="flex-basis: 86%; text-align: left;">
                <?php
                include_once "php/databaseconnect.php";
                $sql = "SELECT * FROM messages";
                $result = mysqli_query($dbc, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($row['status'] == "unread") {
                        $status = "var(--main-blue-color)";
                    } else {
                        $status = "transparent";
                    }
                    echo "<div class='user-table-div'>
                        <table class='user-edit'>
                        <thead>
                            <tr>
                                <th style='width: 2%; max-width: 2%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;'>ID</th>
                                <th style='width: 5%; max-width: 5%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;'>Ime</th>
                                <th style='width: 18%; max-width: 18%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;'>Email adresa</th>
                                <th style='width: 8%; max-width: 8%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;'>Datum</th>
                                <th style='width: 7%; max-width: 7%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;'>Vrijeme</th>
                                <th style='width: 55%; max-width: 55%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;'>Poruka</th>
                                <th style='width: 5%; max-width: 5%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;'>Proizvod</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr style='background-color: $status;'>
                            <td style='vertical-align: top;'>{$row['id']}</td>
                            <td style='vertical-align: top;'>{$row['name']}</td>
                            <td style='vertical-align: top;'>{$row['email']}</td>
                            <td style='vertical-align: top;'>{$row['date']}</td>
                            <td style='vertical-align: top;'>{$row['time']}</td>
                            <td style='vertical-align: top;'>{$row['message']}</td>
                            <td style='vertical-align: top;'>{$row['product']}</td>
                        </tr></table></div>";
                }
                ?>
            </div>
        </div>
    </div>
</section>