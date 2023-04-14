        <!-- Section 03 -->
        <section class="background-white text-black">
            <div class="greeting-message">
                <?php
                if (isset($_SESSION["currentUserName"])) {
                    $currentUserName = $_SESSION["currentUserName"];
                    echo "<h1 class='block main-title' style='letter-spacing: -1px;'>Pozdrav, $currentUserName!</h1>";
                    echo "<img class='block vertical-center padding-left' src='images/Wave.png' width='50'>";
                } else {
                    echo "<h1 class='block main-title' style='letter-spacing: -1px;'>Dobrodošli u online shop kvalitetne audio opreme!</h1>";
                    echo "<img class='block vertical-center padding-left' src='images/Wave.png' width='50'>";
                }
                ?>
            </div>
        </section>