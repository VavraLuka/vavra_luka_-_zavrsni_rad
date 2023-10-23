<section id="newsletterEmails">
    <div class="section-wrapper">
        <hr>
        <div class="two-elements">
            <div class="single-element-left">
                <h2>Newsletter</h2>
            </div>
            <div class="single-element-right" style="text-align: left;">
                <h2>Email adrese prijavljene na newsletter</h2>
                <?php
                include_once "php/databaseconnect.php";
                $sql = "SELECT * FROM newsletter";
                $result = mysqli_query($dbc, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>{$row['email']}</p>";
                }
                ?>
            </div>
        </div>
    </div>
</section>