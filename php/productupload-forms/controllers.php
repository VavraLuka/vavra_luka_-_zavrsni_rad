<section class="newproduct-form">
    <form method="POST" action="php/newproduct-process.php" accept-charset="UTF-8" autocomplete="off">
        <input type="hidden" name="category" id="category" value="controllers">
        <input type="text" maxlength="60" name="name" id="name" placeholder="Naziv proizvoda" required oninvalid="this.setCustomValidity('Obavezan naziv proizvoda')"><br>
        <input type="text" maxlength="30" name="manufacturer" id="manufacturer" placeholder="Proizvođač" required oninvalid="this.setCustomValidity('Obavezan naziv proizvođača')"><br>
        <div class="two-inputs">
            <div class="input-div-two"><input type="number" maxlength="14" name="price" id="price" step="0.01" placeholder="Cijena (€)" required oninvalid="this.setCustomValidity('Obavezna cijena proizvoda')"><br></div>
            <div class="input-div-two"><input type="number" maxlength="4" name="quantity" id="quantity" placeholder="Količina na stanju" required oninvalid="this.setCustomValidity('Obavezna količina na stanju')"><br></div>
        </div>
        <input type="text" name="softwareSupport" id="softwareSupport" maxlength="100" placeholder="Kompatibilni software" required oninvalid="this.setCustomValidity('Obavezno polje')"><br>
        <div class="two-inputs">
            <div class="input-div-two"><input type="number" maxlength="4" name="deckNumber" id="deckNumber" placeholder="Broj deck-ova" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
            <div class="input-div-two"><select class="input-type" name="externalPowerSource" id="externalPowerSource" required oninvalid="this.setCustomValidity('Obavezno polje')">
                    <option value="" disabled selected hidden>Dodatno napajanje</option>
                    <option value="Da">Da</option>
                    <option value="Ne">Ne</option>
                </select><br></div>
        </div>
        <div class="two-inputs">
            <div class="input-div-two"><input type="text" maxlength="24" name="dimensions" id="dimensions" placeholder="Dimenzije (mm)" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
            <div class="input-div-two"><input type="number" maxlength="6" name="weight" id="weight" step="0.1" placeholder="Težina (kg)" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
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