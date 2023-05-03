<section class="newproduct-form">
    <form action="php/edituser-process.php" method="post" accept-charset="UTF-8" autocomplete="off">
        <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>">
        <div class="two-inputs">
            <div class="input-div-two"><label for="name">Ime</label><input value="<?php echo $row['name']; ?>" type="text" maxlength="24" name="name" id="name" placeholder="Ime"><br></div>
            <div class="input-div-two"><label for="surname">Prezime</label><input value="<?php echo $row['surname']; ?>" type="text" maxlength="24" name="surname" id="surname" placeholder="Prezime"><br></div>
        </div>
        <div class="two-inputs">
            <div class="input-div-two">
                <label for="address">Adresa</label><input value="<?php echo $row['address']; ?>" type="text" name="address" id="address" maxlength="60" placeholder="Adresa"><br>
            </div>
            <div class="input-div-two">
                <label for="postalCode">Poštanski broj</label><input value="<?php echo $row['postalCode']; ?>" type="text" name="postalCode" id="postalCode" maxlength="8" placeholder="Poštanski broj"><br>
            </div>
        </div>
        <div class="two-inputs">
            <div class="input-div-two"><label for="city">Grad</label><input value="<?php echo $row['city']; ?>" type="text" name="city" id="city" maxlength="24" placeholder="Grad"><br></div>
            <div class="input-div-two">
                <label for="state">Država</label><select class="input-type" name="state" id="state">
                    <option value="" disabled hidden>Država</option>
                    <option value="Hrvatska" <?php if ($row['state'] == "Hrvatska") echo "selected"; ?>>Hrvatska</option>
                    <option value="BiH" <?php if ($row['state'] == "BiH") echo "selected"; ?>>Bosna i Hercegovina</option>
                    <option value="Srbija" <?php if ($row['state'] == "Srbija") echo "selected"; ?>>Srbija</option>
                    <option value="Mađarska" <?php if ($row['state'] == "Mađarska") echo "selected"; ?>>Mađarska</option>
                    <option value="Slovenija" <?php if ($row['state'] == "Slovenija") echo "selected"; ?>>Slovenija</option>
                    <option value="Italija" <?php if ($row['state'] == "Italija") echo "selected"; ?>>Italija</option>
                    <option value="CrnaGora" <?php if ($row['state'] == "CrnaGora") echo "selected"; ?>>Crna Gora</option>
                </select><br>
            </div>
        </div>
        <label for="contactNumber">Kontakt broj</label><input value="<?php echo $row['contactNumber']; ?>" type="text" name="contactNumber" id="contactNumber" maxlength="20" placeholder="Kontakt broj"><br>
        <label for="email">Email</label><input value="<?php echo $row['email']; ?>" type="email" name="email" id="email" maxlength="34" placeholder="Email"><br>
        <div class="form-buttons">
            <input type="submit" name="submit" value="Ažurirajte podatke">
            <input type="reset" value="Očisti podatke">
        </div>

        <button onclick="deleteUser()">Obrišite korisnički račun</button>
        <script>
            function deleteUser() {
                if (confirm("Jeste li sigurni da želite izbrisati ovaj korisnički račun? Korisnik mu više neće moći pristupiti.")) {
                    if (confirm("Potvrdite brisanje ovog korisničkog računa.")) {
                        const userId = <?php echo $row['id']; ?>;
                        $.ajax({
                            url: 'deleteuser-process.php',
                            type: 'POST',
                            data: {
                                userId: userId
                            },
                            success: function(response) {

                            },
                            error: function(xhr, status, error) {

                            }
                        });
                    } else {
                        event.preventDefault();
                    }
                } else {
                    event.preventDefault();
                }
            }
        </script>
    </form>
</section>