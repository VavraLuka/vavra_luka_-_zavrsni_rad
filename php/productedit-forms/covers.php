<section class="newproduct-form">
    <form method="POST" action="php/editproduct-process.php" accept-charset="UTF-8" autocomplete="off">
        <input type="hidden" name="id" id="id" value="<?php echo $row['id'] ?>">
        <input type="hidden" name="category" id="category" value="covers">
        <input type="text" name="name" id="name" maxlength="60" placeholder="Naziv proizvoda" required oninvalid="this.setCustomValidity('Obavezan naziv proizvoda')" value="<?php echo $row['name']; ?>"><br>
        <input type="text" name="manufacturer" id="manufacturer" maxlength="30" placeholder="Proizvođač" required oninvalid="this.setCustomValidity('Obavezan naziv proizvođača')" value="<?php echo $row['manufacturer']; ?>"><br>
        <div class="two-inputs">
            <div class="input-div-two"><input type="number" name="price" maxlength="14" id="price" step="0.01" placeholder="Cijena" required oninvalid="this.setCustomValidity('Obavezna cijena proizvoda')" value="<?php echo $row['price']; ?>"><br></div>
            <div class="input-div-two"><input type="number" name="quantity" maxlength="4" id="quantity" placeholder="Količina" required oninvalid="this.setCustomValidity('Obavezna količina na stanju')" value="<?php echo $row['quantity']; ?>"><br></div>
        </div>
        <input type="text" name="caseFor" id="caseFor" maxlength="60" placeholder="Namijenjeno za" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['caseFor']; ?>"><br>
        <div class="two-inputs">
            <div class="input-div-two"><input type="text" maxlength="10" name="color" id="color" placeholder="Boja" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['color']; ?>"><br></div>
            <div class="input-div-two"><select class="input-type" name="caseType" id="caseType" required oninvalid="this.setCustomValidity('Obavezno polje')">
                    <option value="" disabled hidden>Tip</option>
                    <option value="flightCases" <?php if ($row['caseType'] == "flightCases") echo "selected"; ?>>Flight cases</option>
                    <option value="casesAndBags" <?php if ($row['caseType'] == "casesAndBags") echo "selected"; ?>>Torbe i kutije</option>
                    <option value="covers" <?php if ($row['caseType'] == "covers") echo "selected"; ?>>Presvlake</option>
                </select><br></div>
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