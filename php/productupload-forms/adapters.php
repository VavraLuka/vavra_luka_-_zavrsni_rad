<section class="newproduct-form">
    <div class="section-wrapper">
        <form method="POST" action="php/newproduct-process.php" accept-charset="UTF-8">
            <input type="hidden" name="category" id="category" value="adapters">
            <input type="text" name="name" id="name" placeholder="Naziv proizvoda"><br>
            <input type="text" name="manufacturer" id="manufacturer" placeholder="Proizvođač"><br>
            <div class="two-inputs">
                <div class="input-div-two"><input type="number" name="price" id="price" placeholder="Cijena"><br></div>
                <div class="input-div-two"><input type="number" name="quantity" id="quantity" placeholder="Količina"><br></div>
            </div>
            <div class="two-inputs">
                <div class="input-div-two"><input type="" name="leftSide" id="leftSide" placeholder="Konektor (lijevi kraj)"><br></div>
                <div class="input-div-two"><select class="input-type" name="leftType" id="leftType">
                        <option value="" disabled selected hidden>Tip</option>
                        <option value="Da">Muški</option>
                        <option value="Ne">Ženski</option>
                    </select><br></div>
            </div>
            <div class="two-inputs">
                <div class="input-div-two"><input type="" name="rightSide" id="rightSide" placeholder="Konektor (desni kraj)"><br></div>
                <div class="input-div-two"><select class="input-type" name="rightType" id="rightType">
                        <option value="" disabled selected hidden>Tip</option>
                        <option value="Da">Muški</option>
                        <option value="Ne">Ženski</option>
                    </select><br></div>
            </div>
            <div class="two-inputs">
                <div class="input-div-two"><input type="text" name="color" id="color" placeholder="Boja"><br></div>
                <div class="input-div-two"><input type="number" name="length" id="length" step="0.1" placeholder="Duljina (cm)"><br></div>
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