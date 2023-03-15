<?php
    include_once 'header.php';
?>
        <section class="login">
            <div class="login-form">
                <?php
                    if(isset($_GET["error"])){
                        if($_GET["error"] == "emptyinput"){
                            echo "<div class='error-paragraph'><p>Molimo popunite sva polja.</p></div>";
                        } else if($_GET["error"] == "wronglogin"){
                            echo "<div class='error-paragraph'><p>Neispravni podatci za prijavu. Pokušajte ponovno.</p></div>";
                        } else if($_GET["error"] == "wrongpassword"){
                            echo "<div class='error-paragraph'><p>Unešena je neispravna lozinka. Pokušajte ponovno.</p></div>";
                        }
                        echo "<br><br>";
                    }
                ?>
                <form action="php/login.php" method="post">
                    <h2>Prijava korisnika</h2>
                    <label for="usernameUser">Korisničko ime</label><br>
                    <input class="input-text" type="text" name="usernameUser" id="usernameUser" placeholder="Korisničko ime"><br><br>
                    <label for="passwordUser">Lozinka</label><br>
                    <input class="input-text" type="password" name="passwordUser" id="passwordUser" placeholder="Lozinka"><br><br>
                    <div class="form-buttons"><input type="submit" name="submit" value="Prijava"></div>
                </form>
            </div>
        </section>
    </body>
</html>