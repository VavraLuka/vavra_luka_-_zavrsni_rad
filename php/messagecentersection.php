<!-- Message center -->
<section id="messageCenter">
    <div class="section-wrapper">
        <hr>
        <div class="two-elements">
            <div class="single-element-left">
                <h2>Upiti korisnika</h2>
            </div>
            <div class="single-element-right" style="text-align: left;">
                <?php
                include_once "php/databaseconnect.php";
                $sql = "SELECT * FROM messages";
                $result = mysqli_query($dbc, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>{$row['email']}</p>";
                }
                ?>
            </div>
        </div>
    </div>
</section>