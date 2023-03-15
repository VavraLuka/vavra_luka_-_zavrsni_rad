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
                            echo "<div class='error-paragraph'><p>Neispravno korisničko ime. Dozvoljeni znakovi su a-z, A-Z, 0-9.</p></div>";
                        } else if($_GET["error"] == "invalidpassword"){
                            echo "<div class='error-paragraph'><p>Unešene lozinke nisu jednake.</p></div>";
                        } else if($_GET["error"] == "usernameexists"){
                            echo "<div class='error-paragraph'><p>Korisničko ime već postoji. Molimo unesite drugo korisničko ime.</p></div>";
                        } else if($_GET["error"] == "none"){
                            echo "<div class='signup-paragraph'><p>Uspješno ste registrirani!</p></div>";
                        }
                        echo "<br><br>";
                    }
                ?>
                <form action="php/signup.php" method="post">
                    <h2>Registracija korisnika</h2>
                    <label for="name">Ime</label><br>
                    <input class="input-text" type="text" name="name" id="name" placeholder="Ime"><br><br>
                    <label for="surname">Prezime</label><br>
                    <input class="input-text" type="text" name="surname" id="surname" placeholder="Prezime"><br><br>
                    <label for="usernameUser">Korisničko ime</label><br>
                    <input class="input-text" type="text" name="usernameUser" id="usernameUser" placeholder="Korisničko ime"><br><br>
                    <label for="passwordUser">Lozinka</label><br>
                    <input class="input-text" type="password" name="passwordUser" id="passwordUser" placeholder="Lozinka"><br><br>
                    <label for="passwordrepeatUser">Ponovite lozinku</label><br>
                    <input class="input-text" type="password" name="passwordrepeatUser" id="passwordrepeatUser" placeholder="Ponovite lozinku"><br><br>
                    <div class="form-buttons"><input type="submit" name="submit" value="Registracija">
                    <input type="reset" value="Očisti podatke"></div>
                </form>
            </div>
        </section>
    </body>
</html>