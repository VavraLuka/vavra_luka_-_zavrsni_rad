<section class="newproduct-form">
    <form method="POST" action="php/editproduct-process.php" accept-charset="UTF-8" autocomplete="off">
        <input type="hidden" name="id" id="id" value="<?php echo $row['id'] ?>">
        <input type="hidden" name="category" id="category" value="light">
        <input type="text" name="name" maxlength="60" id="name" placeholder="Naziv proizvoda" required oninvalid="this.setCustomValidity('Obavezan naziv proizvoda')" value="<?php echo $row['name']; ?>"><br>
        <input type="text" name="manufacturer" maxlength="30" id="manufacturer" placeholder="Proizvođač" required oninvalid="this.setCustomValidity('Obavezan naziv proizvođača')" value="<?php echo $row['manufacturer']; ?>"><br>
        <div class="two-inputs">
            <div class="input-div-two"><input type="number" maxlength="14" name="price" id="price" step="0.01" placeholder="Cijena (€)" required oninvalid="this.setCustomValidity('Obavezna cijena proizvoda')" value="<?php echo $row['price']; ?>"><br></div>
            <div class="input-div-two"><input type="number" maxlength="4" name="quantity" id="quantity" placeholder="Količina" required oninvalid="this.setCustomValidity('Obavezna količina na stanju')" value="<?php echo $row['quantity']; ?>"><br></div>
        </div>
        <input type="text" name="lightSource" id="lightSource" maxlength="60" placeholder="Izvor svjetla" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['lightSource']; ?>"><br>
        <select class="input-type" name="lightType" id="lightType" required oninvalid="this.setCustomValidity('Obavezno polje')">
            <option value="" disabled hidden>Tip rasvjete</option>
            <option value="movingHeadSpot" <?php if ($row['lightType'] == "movingHeadSpot") echo "selected"; ?>>Moving Head - Spot</option>
            <option value="movingHeadBeam" <?php if ($row['lightType'] == "movingHeadBeam") echo "selected"; ?>>Moving Head - Beam</option>
            <option value="movingHeadWash" <?php if ($row['lightType'] == "movingHeadWash") echo "selected"; ?>>Moving Head - Wash</option>
            <option value="LEDPar" <?php if ($row['lightType'] == "LEDPar") echo "selected"; ?>>LED Par</option>
        </select><br>
        <div class="two-inputs">
            <div class="input-div-two"><input type="number" maxlength="10" name="beamAngle" id="beamAngle" placeholder="Kut svjetlosnog snopa (°)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['beamAngle']; ?>"><br></div>
            <div class="input-div-two"><input type="number" maxlength="5" name="powerConsumption" id="powerConsumption" placeholder="Potrošnja energije (W)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['powerConsumption']; ?>"><br></div>
        </div>
        <div class="two-inputs">
            <div class="input-div-two"><input type="text" maxlength="24" name="dimensions" id="dimensions" placeholder="Dimenzije (mm)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['dimensions']; ?>"><br></div>
            <div class="input-div-two"><input type="number" maxlength="6" name="weight" id="weight" step="0.1" placeholder="Težina (kg)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['weight']; ?>"><br></div>
        </div>
        <textarea name="description" id="description" maxlength="800" placeholder="Opis proizvoda (neobavezno)" value="<?php echo $row['description']; ?>"></textarea>
        <input type="text" name="imageURL" id="imageURL" maxlength="100" placeholder="URL fotografije" required oninvalid="this.setCustomValidity('Obavezna fotografija proizvoda')" value="<?php echo $row['imageURL']; ?>"><br>
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