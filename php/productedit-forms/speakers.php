<section class="newproduct-form">
    <form method="POST" action="php/editproduct-process.php" accept-charset="UTF-8" id="productForm" autocomplete="off">
        <input type="hidden" name="id" id="id" value="<?php echo $row['id'] ?>">
        <input type="hidden" name="category" id="category" value="speakers">
        <label for="name">Naziv proizvoda</label>
        <input type="text" maxlength="60" name="name" id="name" placeholder="Naziv proizvoda" required oninvalid="this.setCustomValidity('Obavezan naziv proizvoda')" value="<?php echo $row['name']; ?>"><br>
        <label for="manufacturer">Proizvođač</label>
        <input type="text" maxlength="30" name="manufacturer" id="manufacturer" placeholder="Proizvođač" required oninvalid="this.setCustomValidity('Obavezan naziv proizvođača')" value="<?php echo $row['manufacturer']; ?>"><br>
        <div class="two-inputs">
            <div class="input-div-two"><label for="price">Cijena (€)</label><input type="number" maxlength="14" name="price" id="price" step="0.01" placeholder="Cijena (€)" required oninvalid="this.setCustomValidity('Obavezna cijena proizvoda')" value="<?php echo $row['price']; ?>"><br></div>
            <div class="input-div-two"><label for="quantity">Količina na stanju</label><input type="number" name="quantity" maxlength="4" id="quantity" placeholder="Količina na stanju" required oninvalid="this.setCustomValidity('Obavezna količina na stanju')" value="<?php echo $row['quantity']; ?>"><br></div>
        </div>
        <label for="speakerType">Tip zvučnika</label>
        <select class="input-type" name="speakerType" id="speakerType" required oninvalid="this.setCustomValidity('Obavezan tip zvučnika')">
            <option value="" disabled hidden>Tip zvučnika</option>
            <option value="speakerBundle" <?php if ($row['speakerType'] == "speakerBundle") echo "selected"; ?>>Komplet razglasa</option>
            <option value="activeSpeaker" <?php if ($row['speakerType'] == "activeSpeaker") echo "selected"; ?>>Aktivni zvučnik</option>
            <option value="passiveSpeaker" <?php if ($row['speakerType'] == "passiveSpeaker") echo "selected"; ?>>Pasivni zvučnik</option>
            <option value="monitorSpeaker" <?php if ($row['speakerType'] == "monitorSpeaker") echo "selected"; ?>>Monitorski zvučnik</option>
        </select><br>
        <label for="drivers">Driveri</label>
        <input type="text" name="drivers" maxlength="100" id="drivers" placeholder="Driveri" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['drivers']; ?>"><br>
        <div class="three-inputs">
            <div class="input-div-three"><label for="RMS">RMS (W)</label><input maxlength="4" type="number" name="RMS" id="RMS" placeholder="RMS (W)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['RMS']; ?>"><br></div>
            <div class="input-div-three"><label for="maxPower">Maksimalna snaga (W)</label><input maxlength="4" type="number" name="maxPower" id="maxPower" placeholder="Maksimalna snaga (W)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['maxPower']; ?>"><br></div>
            <div class="input-div-three"><label for="soundPressure">Maksimalna glasnoća (dB)</label><input maxlength="4" type="number" name="soundPressure" id="soundPressure" placeholder="Maksimalna glasnoća (dB)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['soundPressure']; ?>"><br></div>
        </div>
        <div class="two-inputs">
            <div class="input-div-two"><label for="minFrequency">Minimalna frekvencija (Hz)</label><input maxlength="3" type="number" name="minFrequency" id="minFrequency" placeholder="Minimalna frekvencija (Hz)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['minFrequency']; ?>"><br></div>
            <div class="input-div-two"><label for="maxFrequency">Maksimalna frekvencija (Hz)</label><input maxlength="5" type="number" name="maxFrequency" id="maxFrequency" placeholder="Maksimalna frekvencija (Hz)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['maxFrequency']; ?>"><br></div>
        </div>
        <div class="two-inputs">
            <div class="input-div-two"><label for="dimensions">Dimenzije (mm)</label><input type="text" maxlength="24" name="dimensions" id="dimensions" placeholder="Dimenzije (mm)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['dimensions']; ?>"><br></div>
            <div class="input-div-two"><label for="weight">Težina (kg)</label><input type="number" maxlength="6" name="weight" id="weight" step="0.1" placeholder="Težina (kg)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['weight']; ?>"><br></div>
        </div>
        <label for="description">Opis proizvoda (neobavezno)</label>
        <textarea name="description" id="description" maxlength="800" placeholder="Opis proizvoda (neobavezno)" value="<?php echo $row['description']; ?>"></textarea>
        <label for="imageURL">URL fotografije</label>
        <input type="text" name="imageURL" id="imageURL" maxlength="200" placeholder="URL fotografije" required oninvalid="this.setCustomValidity('Obavezna fotografija proizvoda')" value="<?php echo $row['imageURL']; ?>"><br>
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
    <form action="php/deleterow-process.php" method="POST" onsubmit="return confirmSubmit();" style="width: 49%; float: right;">
        <input type="number" name="productId" id="productId" value="<?php echo $row['id']; ?>" hidden>
        <input style="background-color: red; border: 2px solid red;" type="submit" name="submit" value="Obrišite proizvod" onclick="deleteProduct()">
    </form>
    <script>
        function confirmSubmit() {
            var confirmed = confirm("Jeste li sigurni da želite ukloniti ovaj proizvod? Proizvod će biti trajno izbrisan iz baze podataka.");
            if (confirmed) {
                confirmed = confirm("Potvrdite brisanje proizvoda.");
                return confirmed;
            }
            return false;
        }
    </script>
</section>