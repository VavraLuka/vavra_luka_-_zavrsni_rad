<?php
include_once 'header.php';
?>
<section class="section-signin">
    <h2>Prijavite se</h2>
    <div class="signin-section vertical-padding">
        <div class="signin-image">
            <img src="images/SignIn.svg" width="240">
        </div>
        <div class="signin-form">
            <form action="php/signin-process.php" method="post">
                <div class="input-div-full"><input class="input-text" type="text" name="email" id="email" placeholder="Email adresa"><br></div>
                <div class="input-div-full"><input class="input-text" type="password" name="passwordUser" id="passwordUser" placeholder="Lozinka"><br></div>
                <div class="form-buttons"><input type="submit" name="submit" value="Prijava">
                    <input type="reset" value="Očisti podatke">
                </div>
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