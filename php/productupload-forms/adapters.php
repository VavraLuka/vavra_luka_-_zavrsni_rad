<section class="newproduct-form">
        <form method="POST" action="php/newproduct-process.php" accept-charset="UTF-8">
            <input type="hidden" name="category" id="category" value="adapters">
            <input type="text" name="name" id="name" placeholder="Naziv proizvoda" required oninvalid="this.setCustomValidity('Obavezan naziv proizvoda')"><br>
            <input type="text" name="manufacturer" id="manufacturer" placeholder="Proizvođač" required oninvalid="this.setCustomValidity('Obavezan naziv proizvođača')"><br>
            <div class="two-inputs">
                <div class="input-div-two"><input type="number" name="price" id="price" step="0.01" placeholder="Cijena" required oninvalid="this.setCustomValidity('Obavezna cijena proizvoda')"><br></div>
                <div class="input-div-two"><input type="number" name="quantity" id="quantity" placeholder="Količina" required oninvalid="this.setCustomValidity('Obavezna količina na stanju')"><br></div>
            </div>
            <div class="two-inputs">
                <div class="input-div-two"><input type="" name="leftSide" id="leftSide" placeholder="Konektor (lijevi kraj)" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
                <div class="input-div-two"><select class="input-type" name="leftType" id="leftType" required oninvalid="this.setCustomValidity('Obavezno polje')">
                        <option value="" disabled selected hidden>Tip</option>
                        <option value="Da">Muški</option>
                        <option value="Ne">Ženski</option>
                    </select><br></div>
            </div>
            <div class="two-inputs">
                <div class="input-div-two"><input type="" name="rightSide" id="rightSide" placeholder="Konektor (desni kraj)" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
                <div class="input-div-two"><select class="input-type" name="rightType" id="rightType" required oninvalid="this.setCustomValidity('Obavezno polje')">
                        <option value="" disabled selected hidden>Tip</option>
                        <option value="Da">Muški</option>
                        <option value="Ne">Ženski</option>
                    </select><br></div>
            </div>
            <div class="two-inputs">
                <div class="input-div-two"><input type="text" name="color" id="color" placeholder="Boja" ><br></div>
                <div class="input-div-two"><input type="number" name="length" id="length" step="0.1" placeholder="Duljina (cm)"><br></div>
            </div>
            <textarea name="description" id="description" placeholder="Opis proizvoda (neobavezno)"></textarea>
            <input type="text" name="imageURL" id="imageURL" placeholder="URL fotografije" required oninvalid="this.setCustomValidity('Obavezna fotografija proizvoda')"><br>
            <div id="extra-inputs"></div>
            <p>Za dodavanje do 3 dodatne informacije o proizvodu, pritisnite '+' ikonu ispod.</p>
            <div id="add-extra-inputs">
                <img src="images/addIcon.png">
            </div>
            <div class="form-buttons">
                <div class="input-div-two"><input type="submit" name="submit" value="Dodaj proizvod"></div>
                <div class="input-div-two"><input type="reset" value="Očisti podatke"></div>
            </div>
        </form>
</section>
<script type="text/javascript" src="js/addextrainputs.js"></script>