<section class="newproduct-form">
    <form method="POST" action="php/newproduct-process.php" accept-charset="UTF-8" autocomplete="off">
        <input type="hidden" name="category" id="category" value="cables">
        <input type="text" name="name" id="name" maxlength="60" placeholder="Naziv proizvoda" required oninvalid="this.setCustomValidity('Obavezan naziv proizvoda')"><br>
        <input type="text" name="manufacturer" id="manufacturer" maxlength="30" placeholder="Proizvođač" required oninvalid="this.setCustomValidity('Obavezan naziv proizvođača')"><br>
        <div class="two-inputs">
            <div class="input-div-two"><input type="number" maxlength="14" name="price" id="price" step="0.01" placeholder="Cijena (€)" required oninvalid="this.setCustomValidity('Obavezna cijena proizvoda')"><br></div>
            <div class="input-div-two"><input type="number" maxlength="4" name="quantity" id="quantity" placeholder="Količina na stanju" required oninvalid="this.setCustomValidity('Obavezna količina na stanju')"><br></div>
        </div>
        <div class="three-inputs">
            <div class="input-div-three"><select class="input-type" name="cableType" id="cableType" required oninvalid="this.setCustomValidity('Obavezno polje')">
                    <option value="" disabled selected hidden>Tip kabla</option>
                    <option value="instrumentCable">Kabel za instrumente</option>
                    <option value="microphoneCable">Mikrofonski kabel</option>
                    <option value="speakerCable">Speaker kabel</option>
                    <option value="audioCable">Signalni kabel</option>
                    <option value="midiCable">MIDI kabel</option>
                    <option value="dmxCable">DMX kabel</option>
                    <option value="powerCable">Napojni kabel</option>
                    <option value="extendCable">Produžni kabel</option>
                </select></div>
            <div class="input-div-three"><input type="number" maxlength="14" name="length" id="length" step="0.1" placeholder="Duljina kabla (cm)" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
            <div class="input-div-three"><input type="text" maxlength="10" name="color" id="color" placeholder="Boja" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
        </div>
        <div class="two-inputs">
            <div class="input-div-two"><input type="text" maxlength="12" name="rightJack" id="rightJack" placeholder="Konektor (desni kraj)" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
            <div class="input-div-two"><select class="input-type" name="rightJackType" id="rightJackType" required oninvalid="this.setCustomValidity('Obavezno polje')">
                    <option value="" disabled selected hidden>Tip</option>
                    <option value="male">Muški</option>
                    <option value="female">Ženski</option>
                </select><br></div>
        </div>
        <div class="two-inputs">
            <div class="input-div-two"><input type="text" maxlength="12" name="leftJack" id="leftJack" placeholder="Konektor (lijevi kraj)" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
            <div class="input-div-two"><select class="input-type" name="leftJackType" id="leftJackType" required oninvalid="this.setCustomValidity('Obavezno polje')">
                    <option value="" disabled selected hidden>Tip</option>
                    <option value="male">Muški</option>
                    <option value="female">Ženski</option>
                </select><br></div>
        </div>
        <textarea name="description" id="description" maxlength="800" placeholder="Opis proizvoda (neobavezno)"></textarea>
        <input type="text" name="imageURL1" id="imageURL1" maxlength="200" placeholder="URL fotografije" required oninvalid="this.setCustomValidity('Obavezna fotografija proizvoda')"><br>
        <input type="text" name="imageURL2" id="imageURL2" maxlength="200" placeholder="Fotografija"><br>
        <input type="text" name="imageURL3" id="imageURL3" maxlength="200" placeholder="Fotografija"><br>
        <div id="extra-inputs"></div>
        <div id="add-extra-inputs">
            <p>Za dodavanje do 3 dodatne informacije o proizvodu, pritisnite '+' ikonu ispod.</p>
            <img class="add-icon" src="images/addIcon.svg">
        </div><br id="break-line" style="display: none;">
        <div class="form-buttons">
            <div class="input-div-two"><input type="submit" name="submit" value="Dodaj proizvod"></div>
            <div class="input-div-two"><input type="reset" value="Očisti podatke"></div>
        </div>
    </form>
</section>
<script type="text/javascript" src="js/addextrainputs.js"></script>