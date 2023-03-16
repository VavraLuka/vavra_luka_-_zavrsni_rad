<?php
include_once 'header.php';
?>
<section>
    <div class="signup-section">
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<div class='error-paragraph'><p>Molimo popunite sva polja.</p></div>";
            } else if ($_GET["error"] == "invalidpassword") {
                echo "<div class='error-paragraph'><p>Unešene lozinke nisu jednake. Molimo pokušajte ih ponovno unjeti.</p></div>";
            } else if ($_GET["error"] == "emailexists") {
                echo "<div class='error-paragraph'><p>Već postoji korisnik s unešenom email adresom. Želite li se <a href='signin.php'>ulogirati?</a></p></div>";
            } else if ($_GET["error"] == "usernameexists") {
                echo "<div class='error-paragraph'><p>Već postoji korisnik s unešenim korisničkim imenom. Molimo unesite drugo korisničko ime ili se ulogirajte ovdje.</p></div>";
            } else if ($_GET["error"] == "none") {
                echo "<div class='signup-paragraph'><p>Uspješno ste registrirani! Možete započeti postavljati oglase.</p></div>";
            }
            echo "<br>";
        }
        ?>
        <form action="php/signup-process.php" method="post">
            <h2>Registrirajte se, potpuno je besplatno!</h2>
            <div class="two-inputs">
                <div class="input-div"><input class="input-text" type="text" name="name" id="name" placeholder="Ime"><br></div>
                <div class="input-div"><input class="input-text" type="text" name="surname" id="surname" placeholder="Prezime"><br></div>
            </div>
            <div class="two-inputs-address">
                <div class="address"><input class="input-text" type="text" name="address" id="address" placeholder="Adresa i kućni broj"><br></div>
                <div class="postal-code"><input class="input-text" type="text" name="postalCode" id="postalCode" placeholder="Poštanski broj"><br></div>
            </div>
            <div class="two-inputs">
                <div class="input-div"><input class="input-text" type="text" name="city" id="city" placeholder="Grad"><br></div>
                <div class="input-div"><input class="input-text" type="text" name="state" id="state" placeholder="Država"><br></div>
            </div>
            <input class="input-text" type="text" name="contactNumber" id="contactNumber" placeholder="Kontakt broj"><br>
            <input class="input-text" type="email" name="email" id="email" placeholder="Email adresa"><br>
            <input class="input-text" type="password" name="passwordUser" id="passwordUser" placeholder="Lozinka"><br>
            <input class="input-text" type="password" name="passwordRepeatUser" id="passwordRepeatUser" placeholder="Ponovite lozinku"><br>
            <div class="form-buttons">
                <input type="submit" name="submit" value="Registracija">
                <input type="reset" value="Očisti podatke">
            </div>
        </form>
    </div>
</section>
<?php
include_once 'footer.php';
?>