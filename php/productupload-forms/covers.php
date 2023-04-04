<section class="newproduct-form">
    <div class="section-wrapper">
        <form method="POST" action="php/newproduct-process.php" accept-charset="UTF-8">
            <input type="hidden" name="category" id="category" value="covers">
            <input type="text" name="name" id="name" placeholder="Naziv proizvoda" required oninvalid="this.setCustomValidity('Obavezan naziv proizvoda')"><br>
            <input type="text" name="manufacturer" id="manufacturer" placeholder="Proizvođač" required oninvalid="this.setCustomValidity('Obavezan naziv proizvođača')"><br>
            <div class="two-inputs">
                <div class="input-div-two"><input type="number" name="price" id="price" step="0.01" placeholder="Cijena" required oninvalid="this.setCustomValidity('Obavezna cijena proizvoda')"><br></div>
                <div class="input-div-two"><input type="number" name="quantity" id="quantity" placeholder="Količina" required oninvalid="this.setCustomValidity('Obavezna količina na stanju')"><br></div>
            </div>
            <input type="text" name="caseFor" id="caseFor" placeholder="Namijenjeno za" required oninvalid="this.setCustomValidity('Obavezno polje')"><br>
            <div class="two-inputs">
                <div class="input-div-two"><input type="text" name="color" id="color" placeholder="Boja" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
                <div class="input-div-two"><select class="input-type" name="caseType" id="caseType" required oninvalid="this.setCustomValidity('Obavezno polje')">
                        <option value="" disabled selected hidden>Tip</option>
                        <option value="flightCases">Flight cases</option>
                        <option value="casesAndBags">Torbe i kutije</option>
                        <option value="covers">Presvlake</option>
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