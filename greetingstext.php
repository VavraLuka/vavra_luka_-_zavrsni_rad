        <!-- Section 03 -->
        <section class="background-white text-black">
            <div class="greeting-message">
                <?php
                if (isset($_SESSION["currentUserName"])) {
                    $currentUserName = $_SESSION["currentUserName"];
                    echo "<h1 class='main-title'>Pozdrav, $currentUserName!</h1>";
                    echo "<img class='vertical-center' src='images/Wave.png' width='50'>";
                } else {
                    echo "<h1 class='main-title'>Dobrodošli u online shop kvalitetne audio opreme!</h1>";
                    echo "<img class='vertical-center' src='images/Wave.png' width='50'>";
                }
                ?>
            </div>
        </section>