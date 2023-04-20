<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION["currentUserName"])) {
    header("location: pagenotfound.php");
    exit();
}

include_once 'header.php';
?>
<section class="section-signin">
    <div class="signin-section vertical-padding">
        <div class="signin-image">
            <img src="images/SignIn.svg" width="240">
        </div>
        <div class="signin-form">
            <h2>Prijavite se</h2>
            <form action="php/signin-process.php" method="post" autocomplete="off">
                <div class="input-div-full"><input class="input-text" maxlength="60" type="text" name="email" id="email" placeholder="Email adresa"><br></div>
                <div class="input-div-full"><input class="input-text" maxlength="28" minlength="8" type="password" name="passwordUser" id="passwordUser" placeholder="Lozinka"><br></div>

                <div style="display: flex; justify-content: center; width: 50%; margin: 0 auto;">
                    <input class="inline-block" type="checkbox" id="showPassword" onclick="togglePassword()">
                    <p class="inline-block">Prikaži lozinku</p>
                </div>
                <div class="form-buttons"><input type="submit" name="submit" value="Prijava">
                    <input type="reset" value="Očisti podatke">
                </div>
                <a style="text-decoration: none; color: var(--main-blue-color); transition: 0.15s;" onmouseover="this.style.opacity='75%';" onmouseout="this.style.opacity='100%';" href="passwordrecovery.php">
                    <p>Zaboravili ste lozinku?</p>
                </a>
            </form>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<div class='error-paragraph'><p>Molimo popunite sva polja.</p></div>";
                } else if ($_GET["error"] == "wronglogin") {
                    echo "<div class='error-paragraph'><p>Neispravni podatci za prijavu. Molimo pokušajte ponovno unijeti podatke.</p></div>";
                } else if ($_GET["error"] == "wrongpassword") {
                    echo "<div class='error-paragraph'><p>Unešena je neispravna lozinka. Molimo pokušajte ponovno unijeti podatke.</p></div>";
                }
                echo "<br>";
            }
            ?>
        </div>
    </div>
</section>
<?php
include_once 'footer.php';
?>