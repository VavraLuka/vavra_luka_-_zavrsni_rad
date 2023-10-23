<section class="newproduct-form">
    <form method="POST" action="php/editproduct-process.php" accept-charset="UTF-8" autocomplete="off">
        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
        <input type="hidden" name="category" id="category" value="light">
        <label for="name">Naziv proizvoda</label><input type="text" name="name" maxlength="60" id="name" placeholder="Naziv proizvoda" required oninvalid="this.setCustomValidity('Obavezan naziv proizvoda')" value="<?php echo $name; ?>"><br>
        <label for="manufacturer">Proizvođač</label><input type="text" name="manufacturer" maxlength="30" id="manufacturer" placeholder="Proizvođač" required oninvalid="this.setCustomValidity('Obavezan naziv proizvođača')" value="<?php echo $manufacturer; ?>"><br>
        <div class="three-inputs">
            <div class="input-div-three"><label for="price">Cijena (€)</label><input type="number" maxlength="14" name="price" id="price" step="0.01" placeholder="Cijena (€)" required oninvalid="this.setCustomValidity('Obavezna cijena proizvoda')" value="<?php echo $price; ?>"><br></div>
            <div class="input-div-three"><label for="discount">Popust (%)</label><input max="100" min="0" type="number" maxlength="3" name="discount" id="discount" placeholder="Popust (%)" value="<?php echo $discount; ?>"><br></div>
            <div class="input-div-three"><label for="quantity">Količina na stanju</label><input type="number" maxlength="4" name="quantity" id="quantity" placeholder="Količina na stanju" required oninvalid="this.setCustomValidity('Obavezna količina na stanju')" value="<?php echo $quantity; ?>"><br></div>
        </div>
        <label for="lightSource">Izvor svjetla</label><input type="text" name="lightSource" id="lightSource" maxlength="60" placeholder="Izvor svjetla" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $lightSource; ?>"><br>
        <label for="lightType">Tip rasvjete</label><select class="input-type" name="lightType" id="lightType" required oninvalid="this.setCustomValidity('Obavezno polje')">
            <option value="" disabled hidden>Tip rasvjete</option>
            <?php
            $lightTypes = [
                "movingHeadSpot" => "Moving Head - Spot",
                "movingHeadBeam" => "Moving Head - Beam",
                "movingHeadWash" => "Moving Head - Wash",
                "LEDPar" => "LED Par"
            ];
            foreach ($lightTypes as $value => $label) {
                $selected = ($lightType == $value) ? 'selected' : '';
                echo "<option value='$value' $selected>$label</option>";
            }
            ?>
        </select>
        <br>
        <div class="two-inputs">
            <div class="input-div-two"><label for="beamAngle">Kut svjetlosnog snopa (°)</label><input type="number" maxlength="10" name="beamAngle" id="beamAngle" placeholder="Kut svjetlosnog snopa (°)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $beamAngle; ?>"><br></div>
            <div class="input-div-two"><label for="powerConsumption">Potrošnja energije (W)</label><input type="number" maxlength="5" name="powerConsumption" id="powerConsumption" placeholder="Potrošnja energije (W)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $powerConsumption; ?>"><br></div>
        </div>
        <div class="two-inputs">
            <div class="input-div-two"><label for="dimensions">Dimenzije (mm)</label><input type="text" maxlength="24" name="dimensions" id="dimensions" placeholder="Dimenzije (mm)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $dimensions; ?>"><br></div>
            <div class="input-div-two"><label for="weight">Težina (kg)</label><input type="number" maxlength="6" name="weight" id="weight" step="0.1" placeholder="Težina (kg)" required oninvalid="this.setCustomValidity('Obavezno polje')" value="<?php echo $weight; ?>"><br></div>
        </div><label for="description">Opis proizvoda (neobavezno)</label>
        <textarea name="description" id="description" maxlength="800" placeholder="Opis proizvoda (neobavezno)"><?php echo $description; ?></textarea>
        <label for="imageURL1">URL fotografije</label><input type="text" name="imageURL1" id="imageURL1" maxlength="100" placeholder="URL fotografije" required oninvalid="this.setCustomValidity('Obavezna fotografija proizvoda')" value="<?php echo $imageURL1; ?>"><br>
        <label for="imageURL2">Fotografija</label><input type="text" name="imageURL2" id="imageURL2" maxlength="100" placeholder="URL fotografije" value="<?php echo $imageURL2; ?>"><br>
        <label for="imageURL3">Fotografija</label><input type="text" name="imageURL3" id="imageURL3" maxlength="100" placeholder="URL fotografije" value="<?php echo $imageURL3; ?>"><br>
        <div id="extra-inputs">
            <div class="two-inputs">
                <input type="text" name="additionalLine1" id="additionalLine1" placeholder="Opis" maxlength="30" value="<?php echo $additionalLine1; ?>">
                <input type="text" name="additionalLineValue1" id="additionalLineValue1" placeholder="Podatak" maxlength="200" value="<?php echo $additionalLineValue1; ?>">
            </div>
            <div class="two-inputs">
                <input type="text" name="additionalLine2" id="additionalLine2" placeholder="Opis" maxlength="30" value="<?php echo $additionalLine2; ?>">
                <input type="text" name="additionalLineValue2" id="additionalLineValue2" placeholder="Podatak" maxlength="200" value="<?php echo $additionalLineValue2; ?>">
            </div>
            <div class="two-inputs">
                <input type="text" name="additionalLine3" id="additionalLine3" placeholder="Opis" maxlength="30" value="<?php echo $additionalLine3; ?>">
                <input type="text" name="additionalLineValue3" id="additionalLineValue3" placeholder="Podatak" maxlength="200" value="<?php echo $additionalLineValue3; ?>">
            </div>
        </div><br id="break-line" style="display: none;">
        <div class="form-buttons">
            <div class="input-div-two"><input type="submit" name="submit" value="Ažurirajte podatke"></div>
            <div class="input-div-two"><input type="reset" value="Resetiraj podatke"></div>
        </div>
    </form>
    <form action="php/deleterow-process.php" method="POST" onsubmit="return confirmSubmit();" style="width: 49%; float: right;">
        <input type="number" name="productId" id="productId" value="<?php echo $id; ?>" hidden>
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