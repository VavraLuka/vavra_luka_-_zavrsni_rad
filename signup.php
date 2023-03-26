<?php
include_once 'header.php';
?>
<section class="section-signup">
    <h2>Registrirajte se, potpuno je besplatno!</h2>
    <div class="signup-section vertical-padding">
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "none") {
                echo '<div class="signup-image">
                    <img src="images/SignUpSuccesfull.svg" width="240">
                </div>';
            } else {
                echo '<div class="signup-image">
                <img src="images/SignUp.svg" width="240">
            </div>';
            }
        } else {
            echo '<div class="signup-image">
                <img src="images/SignUp.svg" width="240">
            </div>';
        };
        ?>
        <div class="signup-form">
            <form action="php/signup-process.php" method="post" accept-charset="UTF-8">
                <div class="two-inputs">
                    <div class="input-div"><input type="text" name="name" id="name" placeholder="Ime"><br></div>
                    <div class="input-div"><input type="text" name="surname" id="surname" placeholder="Prezime"><br></div>
                </div>
                <div class="two-inputs">
                    <div class="address">
                        <input type="text" name="address" id="address" placeholder="Adresa"><br>
                    </div>
                    <div class="postal-code">
                        <input type="text" name="postalCode" id="postalCode" placeholder="Poštanski broj"><br>
                    </div>
                </div>
                <div class="two-inputs">
                    <div class="input-div"><input type="text" name="city" id="city" placeholder="Grad"><br></div>
                    <div class="input-div">
                        <select class="input-state" name="state" id="state">
                            <option value="" disabled selected hidden>Država</option>
                            <option value="Hrvatska">Hrvatska</option>
                            <option value="BiH">Bosna i Hercegovina</option>
                            <option value="Srbija">Srbija</option>
                            <option value="Mađarska">Mađarska</option>
                            <option value="Slovenija">Slovenija</option>
                            <option value="Italija">Italija</option>
                            <option value="CrnaGora">Crna Gora</option>
                        </select><br>
                    </div>
                </div>
                <input type="text" name="contactNumber" id="contactNumber" placeholder="Kontakt broj"><br>
                <input type="email" name="email" id="email" placeholder="Email"><br>
                <input type="password" name="passwordUser" id="passwordUser" placeholder="Lozinka"><br>
                <input type="password" name="passwordRepeatUser" id="passwordRepeatUser" placeholder="Ponovite lozinku"><br>
                <div class="form-buttons">
                    <input type="submit" name="submit" value="Registracija">
                    <input type="reset" value="Očisti podatke">
                </div>
            </form>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<div class='error-paragraph'><p>Molimo popunite sva polja.</p></div>";
                } else if ($_GET["error"] == "invalidpassword") {
                    echo "<div class='error-paragraph'><p>Unešene lozinke nisu jednake. Molimo pokušajte ih ponovno unijeti.</p></div>";
                } else if ($_GET["error"] == "emailexists") {
                    echo "<div class='error-paragraph'><p>Već postoji korisnik s unešenom email adresom. Želite li se <a class='signin-link' href='signin.php'>ulogirati?</a></p></div>";
                } else if ($_GET["error"] == "none") {
                    echo "<div class='signup-paragraph'><p>Uspješno ste registrirani! Prijavite se <a class='signin-link' href='signin.php'>ovdje</a>.</p></div>";
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