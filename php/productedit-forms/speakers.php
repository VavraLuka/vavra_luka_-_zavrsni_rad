<section class="newproduct-form">
    <form method="POST" action="php/editproduct-process.php" accept-charset="UTF-8" id="productForm" autocomplete="off">
        <input type="hidden" name="id" id="id" value="<?php echo $row['id'] ?>">
        <input type="hidden" name="category" id="category" value="speakers">
        <input type="text" maxlength="60" name="name" id="name" placeholder="Naziv proizvoda" required oninvalid="this.setCustomValidity('Obavezan naziv proizvoda')" value="<?php echo $row['name']; ?>"><br>
        <input type="text" maxlength="30" name="manufacturer" id="manufacturer" placeholder="Proizvođač" required oninvalid="this.setCustomValidity('Obavezan naziv proizvođača')" value="<?php echo $row['manufacturer']; ?>"><br>
        <div class="two-inputs">
            <div class="input-div-two"><input type="number" maxlength="14" name="price" id="price" step="0.01" placeholder="Cijena (€)" required oninvalid="this.setCustomValidity('Obavezna cijena proizvoda')" value="<?php echo $row['price']; ?>"><br></div>
            <div class="input-div-two"><input type="number" name="quantity" maxlength="4" id="quantity" placeholder="Količina" required oninvalid="this.setCustomValidity('Obavezna količina na stanju')" value="<?php echo $row['quantity']; ?>"><br></div>
        </div>
        <select class="input-type" name="speakerType" id="speakerType" required oninvalid="this.setCustomValidity('Obavezan tip zvučnika')">
            <option value="" disabled hidden>Tip zvučnika</option>
            <option value="speakerBundle" <?php if ($row['speakerType'] == "speakerBundle") echo "selected"; ?>>Komplet razglasa</option>
            <option value="activeSpeaker" <?php if ($row['speakerType'] == "activeSpeaker") echo "selected"; ?>>Aktivni zvučnik</option>
            <option value="passiveSpeaker" <?php if ($row['speakerType'] == "passiveSpeaker") echo "selected"; ?>>Pasivni zvučnik</option>
            <option value="monitorSpeaker" <?php if ($row['speakerType'] == "monitorSpeaker") echo "selected"; ?>>Monitorski zvučnik</option>
        </select><br>
        <input type="text" name="drivers" maxlength="100" id="drivers" placeholder="Driveri" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['drivers']; ?>"><br>
        <div class="three-inputs">
            <div class="input-div-three"><input maxlength="4" type="number" name="RMS" id="RMS" placeholder="RMS (W)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['RMS']; ?>"><br></div>
            <div class="input-div-three"><input maxlength="4" type="number" name="maxPower" id="maxPower" placeholder="Maksimalna snaga (W)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['maxPower']; ?>"><br></div>
            <div class="input-div-three"><input maxlength="4" type="number" name="soundPressure" id="soundPressure" placeholder="Maksimalna glasnoća (dB)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['soundPressure']; ?>"><br></div>
        </div>
        <div class="two-inputs">
            <div class="input-div-two"><input maxlength="3" type="number" name="minFrequency" id="minFrequency" placeholder="Minimalna frekvencija" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['minFrequency']; ?>"><br></div>
            <div class="input-div-two"><input maxlength="5" type="number" name="maxFrequency" id="maxFrequency" placeholder="Maksimalna frekvencija" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['maxFrequency']; ?>"><br></div>
        </div>
        <div class="two-inputs">
            <div class="input-div-two"><input type="text" maxlength="24" name="dimensions" id="dimensions" placeholder="Dimenzije (mm)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['dimensions']; ?>"><br></div>
            <div class="input-div-two"><input type="number" maxlength="6" name="weight" id="weight" step="0.1" placeholder="Težina (kg)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['weight']; ?>"><br></div>
        </div>
        <textarea name="description" id="description" maxlength="800" placeholder="Opis proizvoda (neobavezno)" value="<?php echo $row['description']; ?>"></textarea>
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
</section>