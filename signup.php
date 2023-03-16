<?php
    include_once 'header.php';
?>
        <section class="signup">
            <div class="signup-form">
                <?php
                    if(isset($_GET["error"])){
                        if($_GET["error"] == "emptyinput"){
                            echo "<div class='error-paragraph'><p>Molimo popunite sva polja.</p></div>";
                        } else if($_GET["error"] == "invalidusername"){
                            echo "<div class='error-paragraph'><p>Ups! Unjeli ste neispravno korisničko ime. Dozvoljeni znakovi su a-z, A-Z, 0-9.</p></div>";
                        } else if($_GET["error"] == "invalidpassword"){
                            echo "<div class='error-paragraph'><p>Unešene lozinke nisu jednake. Molimo pokušajte ih ponovno unjeti.</p></div>";
                        } else if($_GET["error"] == "emailexists"){
                            echo "<div class='error-paragraph'><p>Već postoji korisnik s unešenom email adresom. Želite li se ulogirati?</p></div>";
                        } else if($_GET["error"] == "usernameexists"){
                            echo "<div class='error-paragraph'><p>Već postoji korisnik s unešenim korisničkim imenom. Molimo unesite drugo korisničko ime ili se ulogirajte ovdje.</p></div>";
                        } else if($_GET["error"] == "none"){
                            echo "<div class='signup-paragraph'><p>Uspješno ste registrirani! Možete započeti postavljati oglase.</p></div>";
                        }
                        echo "<br><br>";
                    }
                ?>
                <form action="php/signup-process.php" method="post">
                    <h2>Registrirajte se, potpuno je besplatno!</h2>
                    <label for="name">Ime</label><br>
                    <input class="input-text" type="text" name="name" id="name" placeholder="Ime"><br>
                    <label for="surname">Prezime</label><br>
                    <input class="input-text" type="text" name="surname" id="surname" placeholder="Prezime"><br>
                    <label for="usernameUser">Korisničko ime</label><br>
                    <input class="input-text" type="text" name="usernameUser" id="usernameUser" placeholder="Korisničko ime"><br>
                    <label for="contactNumber">Kontakt broj</label><br>
                    <input class="input-text" type="text" name="contactNumber" id="contactNumber" placeholder="Kontakt broj"><br>
                    <label for="email">Email adresa</label><br>
                    <input class="input-text" type="email" name="email" id="email" placeholder="Email adresa"><br>
                    <label for="passwordUser">Lozinka</label><br>
                    <input class="input-text" type="password" name="passwordUser" id="passwordUser" placeholder="Lozinka"><br>
                    <label for="passwordrepeatUser">Ponovite lozinku</label><br>
                    <input class="input-text" type="password" name="passwordrepeatUser" id="passwordrepeatUser" placeholder="Ponovite lozinku"><br>
                    <div class="form-buttons"><input type="submit" name="submit" value="Registracija">
                    <input type="reset" value="Očisti podatke"></div>
                </form>
            </div>
        </section>
<?php
    include_once 'footer.php';
?>