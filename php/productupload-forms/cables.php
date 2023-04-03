<section class="newproduct-form">
    <div class="section-wrapper">
        <form method="POST" action="php/newproduct-process.php" accept-charset="UTF-8">
            <input type="hidden" name="category" id="category" value="cables">
            <input type="text" name="name" id="name" placeholder="Naziv proizvoda"><br>
            <input type="text" name="manufacturer" id="manufacturer" placeholder="Proizvođač"><br>
            <div class="two-inputs">
                <div class="input-div-two"><input type="number" name="price" id="price" placeholder="Cijena"><br></div>
                <div class="input-div-two"><input type="number" name="quantity" id="quantity" placeholder="Količina"><br></div>
            </div>
            <div class="three-inputs">
            <div class="input-div-three"><select class="input-type" name="cableType" id="cableType">
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
                <div class="input-div-three"><input type="" name="length" id="length" step="0.1" placeholder="Duljina kabla (cm)"><br></div>
                <div class="input-div-three"><input type="text" name="color" id="color" placeholder="Boja"><br></div>
            </div>
            <div class="two-inputs">
                <div class="input-div-two"><input type="" name="rightJack" id="rightJack" placeholder="Konektor (desni kraj)"><br></div>
                <div class="input-div-two"><select class="input-type" name="rightJackType" id="rightJackType">
                        <option value="" disabled selected hidden>Tip</option>
                        <option value="Da">Muški</option>
                        <option value="Ne">Ženski</option>
                    </select><br></div>
            </div>
            <div class="two-inputs">
                <div class="input-div-two"><input type="" name="leftJack" id="leftJack" placeholder="Konektor (lijevi kraj)"><br></div>
                <div class="input-div-two"><select class="input-type" name="leftJackType" id="leftJackType">
                        <option value="" disabled selected hidden>Tip</option>
                        <option value="Da">Muški</option>
                        <option value="Ne">Ženski</option>
                    </select><br></div>
            </div>
            <input type="text" name="imageURL" id="imageURL" placeholder="URL fotografije"><br>
            <div class="form-buttons">
                <div class="input-div-two"><input type="submit" name="submit" value="Dodaj proizvod"></div>
                <div class="input-div-two"><input type="reset" value="Očisti podatke"></div>
            </div>
        </form>
        </form>
    </div>
</section>