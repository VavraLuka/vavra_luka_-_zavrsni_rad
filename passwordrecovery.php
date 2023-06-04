<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION["currentUserName"])) {
    header("location: pagenotfound.php");
    exit();
}
include_once "header.php";
?>
<section class="products-section">
    <div class="products-wrapper" style="justify-content: none; gap: 0%; display: block; margin-top: 36px; margin-bottom: 36px;">
        <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "none") {
                echo "<img src='images/PasswordRecoverySuccess.svg' width='240'>";
                echo "<h1 style='margin-bottom: 12px; letter-spacing: -1px;'>Odlično, uskoro ćete moći pristupiti Vašem korisničkom računu!</h1>";
            } else {
                echo "<img src='images/PasswordRecovery.svg' width='240'>";
                echo "<h1 style='margin-bottom: 12px; letter-spacing: -1px;'>Zaboravili ste lozinku?</h1>";
            }
        } else {
            echo "<img src='images/PasswordRecovery.svg' width='240'>";
            echo "<h1 style='margin-bottom: 12px; letter-spacing: -1px;'>Zaboravili ste lozinku?</h1>";
        }
        ?>

        <?php
        $passwordRecoveryMessage = array(
            "Uh-oh, izgleda da ste izgubili lozinku! Ne brinite, mi Vam čuvamo leđa. Jednostavno unesite svoju email adresu i mi ćemo Vam poslati poveznicu za resetiranje lozinke. Ovdje smo kako bismo bili sigurni da ste uvijek povezani sa svojim računom, bez obzira na sve.",
            "Izgubili ste lozinku? Nema problema! Svi smo to prošli. Samo unesite email adresu povezanu s Vašim računom i mi ćemo Vam pomoći da se vratite. Želimo biti sigurni da svom računu možete pristupiti što je lakše moguće, pa se ne ustručavajte kontaktirati nas ako Vam je potrebna pomoć.",
            "Ne možete se sjetiti svoje lozinke? Događa se i najboljima! Samo unesite svoju email adresu i mi ćemo Vam poslati upute za ponovno postavljanje lozinke. Vaš nam je račun važan i predani smo njegovom čuvanju. Dopustite nam da Vam pomognemo da se vratite i nastavite tamo gdje ste stali."
        );
        $random_number = rand(0, 2);
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "none") {
                echo "<p>Uspješno smo Vam poslali link za resetiranje lozinke, provjerite svoj email inbox.</p>";
            } else {
                if ($random_number == 0) {
                    echo '<p style="text-align: center; width: 75%; margin: 0 auto;">' . $passwordRecoveryMessage[0] . '</p>';
                } elseif ($random_number == 1) {
                    echo '<p style="text-align: center; width: 75%; margin: 0 auto;">' . $passwordRecoveryMessage[1] . '</p>';
                } else {
                    echo '<p style="text-align: center; width: 75%; margin: 0 auto;">' . $passwordRecoveryMessage[2] . '</p>';
                }
            }
        } else {
            if ($random_number == 0) {
                echo '<p style="text-align: center; width: 75%; margin: 0 auto;">' . $passwordRecoveryMessage[0] . '</p>';
            } elseif ($random_number == 1) {
                echo '<p style="text-align: center; width: 75%; margin: 0 auto;">' . $passwordRecoveryMessage[1] . '</p>';
            } else {
                echo '<p style="text-align: center; width: 75%; margin: 0 auto;">' . $passwordRecoveryMessage[2] . '</p>';
            }
        }
        ?>
        <div class="passwordrecovery" id="passwordrecovery">
            <form method="POST" action="php/passwordrecovery-process.php" autocomplete="off" accept-charset="UTF-8">
                <input maxlength="60" type="email" name="email" id="email" class="inline-block" required oninvalid="this.setCustomValidity('Unesite email adresu')" placeholder="Mail adresa za oporavak lozinke">
                <input type="submit" name="submit" class="inline-block" value="Pošalji">
            </form>
        </div>
        <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emailNotStored") {
                echo "<p>Hm, unešena email adresa ne nalazi se u našem sustavu, molimo ponovno unesite email adresu.</p>";
            }
        }
        ?>
    </div>
</section>
<?php
include_once "footer.php";
?>