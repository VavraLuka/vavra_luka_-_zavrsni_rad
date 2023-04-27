<section class="newproduct-form">
    <form method="POST" action="php/editproduct-process.php" accept-charset="UTF-8" autocomplete="off">
    <input type="hidden" name="id" id="id" value="<?php echo $row['id'] ?>">
        <input type="hidden" name="category" id="category" value="cables">
        <label for="name">Naziv proizvoda</label><input type="text" name="name" id="name" maxlength="60" placeholder="Naziv proizvoda" required oninvalid="this.setCustomValidity('Obavezan naziv proizvoda')" value="<?php echo $row['name']; ?>"><br>
        <label for="manufacturer">Proizvođač</label><input type="text" name="manufacturer" id="manufacturer" maxlength="30" placeholder="Proizvođač" required oninvalid="this.setCustomValidity('Obavezan naziv proizvođača')" value="<?php echo $row['manufacturer']; ?>"><br>
        <div class="two-inputs">
            <div class="input-div-two"><label for="price">Cijena (€)</label><input type="number" maxlength="14" name="price" id="price" step="0.01" placeholder="Cijena (€)" required oninvalid="this.setCustomValidity('Obavezna cijena proizvoda')" value="<?php echo $row['price']; ?>"><br></div>
            <div class="input-div-two"><label for="quantity">Količina na stanju</label><input type="number" maxlength="4" name="quantity" id="quantity" placeholder="Količina na stanju" required oninvalid="this.setCustomValidity('Obavezna količina na stanju')" value="<?php echo $row['quantity']; ?>"><br></div>
        </div>
        <div class="three-inputs">
            <div class="input-div-three"><label for="cableType">Tip kabla</label><select class="input-type" name="cableType" id="cableType" required oninvalid="this.setCustomValidity('Obavezno polje')">
                    <option value="" disabled hidden>Tip kabla</option>
                    <option value="instrumentCable" <?php if ($row['cableType'] == "instrumentCable") echo "selected"; ?>>Kabel za instrumente</option>
                    <option value="microphoneCable" <?php if ($row['cableType'] == "microphoneCable") echo "selected"; ?>>Mikrofonski kabel</option>
                    <option value="speakerCable" <?php if ($row['cableType'] == "speakerCable") echo "selected"; ?>>Speaker kabel</option>
                    <option value="audioCable" <?php if ($row['cableType'] == "audioCable") echo "selected"; ?>>Signalni kabel</option>
                    <option value="midiCable" <?php if ($row['cableType'] == "midiCable") echo "selected"; ?>>MIDI kabel</option>
                    <option value="dmxCable" <?php if ($row['cableType'] == "dmxCable") echo "selected"; ?>>DMX kabel</option>
                    <option value="powerCable" <?php if ($row['cableType'] == "powerCable") echo "selected"; ?>>Napojni kabel</option>
                    <option value="extendCable" <?php if ($row['cableType'] == "extendCable") echo "selected"; ?>>Produžni kabel</option>
                </select></div>
            <div class="input-div-three"><label for="length">Duljina kabla (cm)</label><input type="number" maxlength="14" name="length" id="length" step="0.1" placeholder="Duljina kabla (cm)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['length']; ?>"><br></div>
            <div class="input-div-three"><label for="color">Boja</label><input type="text" maxlength="10" name="color" id="color" placeholder="Boja" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['color']; ?>"><br></div>
        </div>
        <div class="two-inputs">
            <div class="input-div-two"><label for="rightJack">Konektor (desni kraj)</label><input type="text" maxlength="12" name="rightJack" id="rightJack" placeholder="Konektor (desni kraj)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['rightJack']; ?>"><br></div>
            <div class="input-div-two"><label for="rightJackType">Tip</label><select class="input-type" name="rightJackType" id="rightJackType" required oninvalid="this.setCustomValidity('Obavezno polje')">
                    <option value="" disabled hidden>Tip</option>
                    <option value="male" <?php if ($row['rightJackType'] == "male") echo "selected"; ?>>Muški</option>
                    <option value="female" <?php if ($row['rightJackType'] == "female") echo "selected"; ?>>Ženski</option>
                </select><br></div>
        </div>
        <div class="two-inputs">
            <div class="input-div-two"><label for="leftJack">Konektor (lijevi kraj)</label><input type="text" maxlength="12" name="leftJack" id="leftJack" placeholder="Konektor (lijevi kraj)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $row['leftJack']; ?>"><br></div>
            <div class="input-div-two"><label for="leftJackType">Tip</label><select class="input-type" name="leftJackType" id="leftJackType" required oninvalid="this.setCustomValidity('Obavezno polje')">
                    <option value="" disabled hidden>Tip</option>
                    <option value="male" <?php if ($row['leftJackType'] == "male") echo "selected"; ?>>Muški</option>
                    <option value="female" <?php if ($row['leftJackType'] == "female") echo "selected"; ?>>Ženski</option>
                </select><br></div>
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