<section class="newproduct-form">
    <form method="POST" action="php/editproduct-process.php" accept-charset="UTF-8" autocomplete="off">
    <input type="hidden" name="id" id="id" value="<?php echo $row['id'] ?>">
        <input type="hidden" name="category" id="category" value="amplifiers">
        <label for="name">Naziv proizvoda</label><input type="text" name="name" id="name" maxlength="60" placeholder="Naziv proizvoda" required oninvalid="this.setCustomValidity('Obavezan naziv proizvoda')" value="<?php echo $row['name']; ?>"><br>
        <label for="manufacturer">Proizvođač</label><input type="text" name="manufacturer" id="manufacturer" maxlength="30" placeholder="Proizvođač" required oninvalid="this.setCustomValidity('Obavezan naziv proizvođača')" value="<?php echo $row['manufacturer']; ?>"><br>
        <div class="two-inputs">
            <div class="input-div-two"><label for="price">Cijena (€)</label><input type="number" maxlength="14" name="price" id="price" step="0.01" placeholder="Cijena (€)" required oninvalid="this.setCustomValidity('Obavezna cijena proizvoda')" value="<?php echo $row['price']; ?>"><br></div>
            <div class="input-div-two"><label for="quantity">Količina na stanju</label><input type="number" maxlength="4" name="quantity" id="quantity" placeholder="Količina na stanju" required oninvalid="this.setCustomValidity('Obavezna količina na stanju')" value="<?php echo $row['quantity']; ?>"><br></div>
        </div>
        <div class="three-inputs">
            <div class="input-div-three"><label for="limiter">Sadrži limiter</label><select class="input-type" name="limiter" id="limiter" required oninvalid="this.setCustomValidity('Obavezno polje')">
                    <option value="" disabled hidden>Sadrži limiter</option>
                    <option value="Da" <?php if ($row['limiter'] == "Da") echo "selected"; ?>>Da</option>
                    <option value="Ne" <?php if ($row['limiter'] == "Ne") echo "selected"; ?>>Ne</option>
                </select><br></div>
            <div class="input-div-three"><label for="channels">Broj kanala</label><input type="number" maxlength="3" name="channels" id="channels" placeholder="Broj kanala" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['channels']; ?>"><br></div>
            <div class="input-div-three"><label for="power">Snaga (W)</label><input type="number" maxlength="6" name="power" id="power" placeholder="Snaga (W)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['power']; ?>"><br></div>
        </div>
        <div class="two-inputs">
            <div class="input-div-two"><label for="minFrequency">Minimalna frekvencija (Hz)</label><input type="number" maxlength="3" name="minFrequency" id="minFrequency" placeholder="Minimalna frekvencija (Hz)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['minFrequency']; ?>"><br></div>
            <div class="input-div-two"><label for="maxFrequency">Maksimalna frekvencija (Hz)</label><input type="number" maxlength="5" name="maxFrequency" id="maxFrequency" placeholder="Maksimalna frekvencija (Hz)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['maxfrequency']; ?>"><br></div>
        </div>
        <div class="two-inputs">
            <div class="input-div-two"><label for="dimensions">Dimenzije (mm)</label><input type="text" maxlength="24" name="dimensions" id="dimensions" placeholder="Dimenzije (mm)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['dimensions']; ?>"><br></div>
            <div class="input-div-two"><label for="weight">Težina (kg)</label><input type="number" maxlength="6" name="weight" id="weight" step="0.1" placeholder="Težina (kg)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['weight']; ?>"><br></div>
        </div>
        <label for="description">Opis proizvoda (neobavezno)</label><textarea name="description" id="description" maxlength="800" placeholder="Opis proizvoda (neobavezno)" value="<?php echo $row['description']; ?>"></textarea>
        <label for="imageURL">URL fotografije</label><input type="text" name="imageURL" id="imageURL" maxlength="100" placeholder="URL fotografije" required oninvalid="this.setCustomValidity('Obavezna fotografija proizvoda')" value="<?php echo $row['imageURL']; ?>"><br>
        <div id="extra-inputs">
            <div class="two-inputs">
                <input type="text" name="additionalLine1" id="additionalLine1" placeholder="Opis" maxlength="30" value="<?php echo $row['additionalLine1']; ?>">
                <input type="text" name="additionalLineValue1" id="additionalLineValue1" placeholder="Podatak" maxlength="200" value="<?php echo $row['additionalLineValue1']; ?>">
            </div>
            <div class="two-inputs">
                <input type="text" name="additionalLine2" id="additionalLine2" placeholder="Opis" maxlength="30" value="<?php echo $row['additionalLine2']; ?>">
                <input type="text" name="additionalLineValue2" id="additionalLineValue2" placeholder="Podatak" maxlength="200" value="<?php echo $row['additionalLineValue2']; ?>">
            </div>
            <div class="two-inputs">
                <input type="text" name="additionalLine3" id="additionalLine3" placeholder="Opis" maxlength="30" value="<?php echo $row['additionalLine3']; ?>">
                <input type="text" name="additionalLineValue3" id="additionalLineValue3" placeholder="Podatak" maxlength="200" value="<?php echo $row['additionalLineValue3']; ?>">
            </div>
        </div><br id="break-line" style="display: none;">
        <div class="form-buttons">
            <div class="input-div-two"><input type="submit" name="submit" value="Ažurirajte podatke"></div>
            <div class="input-div-two"><input type="reset" value="Očisti podatke"></div>
        </div>
    </form>
</section>