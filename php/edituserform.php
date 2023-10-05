<section class="newproduct-form">
    <form action="php/edituser-process.php" method="post" accept-charset="UTF-8" autocomplete="off">
        <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>">
        <div class="two-inputs">
            <div class="input-div-two"><label for="name">Ime</label><input value="<?php echo $name; ?>" type="text" maxlength="24" name="name" id="name" placeholder="Ime"><br></div>
            <div class="input-div-two"><label for="surname">Prezime</label><input value="<?php echo $surname; ?>" type="text" maxlength="24" name="surname" id="surname" placeholder="Prezime"><br></div>
        </div>
        <div class="two-inputs">
            <div class="input-div-two">
                <label for="address">Adresa</label><input value="<?php echo $address; ?>" type="text" name="address" id="address" maxlength="60" placeholder="Adresa"><br>
            </div>
            <div class="input-div-two">
                <label for="postalCode">Poštanski broj</label><input value="<?php echo $postalCode; ?>" type="text" name="postalCode" id="postalCode" maxlength="8" placeholder="Poštanski broj"><br>
            </div>
        </div>
        <div class="two-inputs">
            <div class="input-div-two"><label for="city">Grad</label><input value="<?php echo $city; ?>" type="text" name="city" id="city" maxlength="24" placeholder="Grad"><br></div>
            <div class="input-div-two">
                <label for="state">Država</label><select class="input-type" name="state" id="state">
                    <option value="" disabled hidden>Država</option>
                    <?php
                    $states = ["Hrvatska", "BiH", "Srbija", "Mađarska", "Slovenija", "Italija", "CrnaGora"];
                    foreach ($states as $stateOption) {
                        $selected = ($state == $stateOption) ? 'selected' : '';
                        echo "<option value='$stateOption' $selected>$stateOption</option>";
                    }
                    ?>
                </select><br>
            </div>
        </div>
        <label for="contactNumber">Kontakt broj</label><input value="<?php echo $contactNumber; ?>" type="text" name="contactNumber" id="contactNumber" maxlength="20" placeholder="Kontakt broj"><br>
        <label for="email">Email</label><input value="<?php echo $email; ?>" type="email" name="email" id="email" maxlength="34" placeholder="Email"><br>
        <div class="form-buttons">
            <input type="submit" name="submit" value="Ažurirajte podatke">
            <input type="reset" value="Resetiraj podatke">
        </div>
    </form>
    <form action="php/deleterow-process.php" method="POST" onsubmit="return confirmSubmit();" style="width: 49%; float: right;">
        <input type="number" name="userId" id="userId" value="<?php echo $row['id']; ?>" hidden>
        <input style="background-color: red; border: 2px solid red;" type="submit" name="submit" value="Obrišite korisnički račun" onclick="deleteProduct()">
    </form>
    <script>
        function confirmSubmit() {
            var confirmed = confirm("Jeste li sigurni da želite ukloniti ovaj korisnički račun? Korisnički račun će biti trajno izbrisan iz baze podataka.");
            if (confirmed) {
                confirmed = confirm("Potvrdite brisanje korisničkog računa.");
                return confirmed;
            }
            return false;
        }
    </script>
</section>