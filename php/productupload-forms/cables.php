<section class="newproduct-form">
    <div class="section-wrapper">
        <form method="POST" action="php/newproduct-process.php" accept-charset="UTF-8">
            <input type="hidden" name="category" id="category" value="cables">
            <input type="text" name="name" id="name" placeholder="Naziv proizvoda" required oninvalid="this.setCustomValidity('Obavezan naziv proizvoda')"><br>
            <input type="text" name="manufacturer" id="manufacturer" placeholder="Proizvođač" required oninvalid="this.setCustomValidity('Obavezan naziv proizvođača')"><br>
            <div class="two-inputs">
                <div class="input-div-two"><input type="number" name="price" id="price" step="0.01" placeholder="Cijena" required oninvalid="this.setCustomValidity('Obavezna cijena proizvoda')"><br></div>
                <div class="input-div-two"><input type="number" name="quantity" id="quantity" placeholder="Količina" required oninvalid="this.setCustomValidity('Obavezna količina na stanju')"><br></div>
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
                <div class="input-div-three"><input type="" name="length" id="length" step="0.1" placeholder="Duljina kabla (cm)" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
                <div class="input-div-three"><input type="text" name="color" id="color" placeholder="Boja" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
            </div>
            <div class="two-inputs">
                <div class="input-div-two"><input type="" name="rightJack" id="rightJack" placeholder="Konektor (desni kraj)" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
                <div class="input-div-two"><select class="input-type" name="rightJackType" id="rightJackType" required oninvalid="this.setCustomValidity('Obavezno polje')">
                        <option value="" disabled selected hidden>Tip</option>
                        <option value="Da">Muški</option>
                        <option value="Ne">Ženski</option>
                    </select><br></div>
            </div>
            <div class="two-inputs">
                <div class="input-div-two"><input type="" name="leftJack" id="leftJack" placeholder="Konektor (lijevi kraj)" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
                <div class="input-div-two"><select class="input-type" name="leftJackType" id="leftJackType" required oninvalid="this.setCustomValidity('Obavezno polje')">
                        <option value="" disabled selected hidden>Tip</option>
                        <option value="Da">Muški</option>
                        <option value="Ne">Ženski</option>
                    </select><br></div>
            </div>
            <input type="text" name="imageURL" id="imageURL" placeholder="URL fotografije" required oninvalid="this.setCustomValidity('Obavezna fotografija proizvoda')"><br>
            <div class="form-buttons">
                <div class="input-div-two"><input type="submit" name="submit" value="Dodaj proizvod"></div>
                <div class="input-div-two"><input type="reset" value="Očisti podatke"></div>
            </div>
        </form>
        </form>
    </div>
</section>