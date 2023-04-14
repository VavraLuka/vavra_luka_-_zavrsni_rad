<section class="newproduct-form">
    <form method="POST" action="php/newproduct-process.php" accept-charset="UTF-8" id="productForm" autocomplete="off">
        <input type="hidden" name="category" id="category" value="speakers">
        <input type="text" maxlength="60" name="name" id="name" placeholder="Naziv proizvoda" required oninvalid="this.setCustomValidity('Obavezan naziv proizvoda')"><br>
        <input type="text" maxlength="30" name="manufacturer" id="manufacturer" placeholder="Proizvođač" required oninvalid="this.setCustomValidity('Obavezan naziv proizvođača')"><br>
        <div class="two-inputs">
            <div class="input-div-two"><input type="number" maxlength="14" name="price" id="price" step="0.01" placeholder="Cijena (€)" required oninvalid="this.setCustomValidity('Obavezna cijena proizvoda')"><br></div>
            <div class="input-div-two"><input type="number" name="quantity" maxlength="4" id="quantity" placeholder="Količina" required oninvalid="this.setCustomValidity('Obavezna količina na stanju')"><br></div>
        </div>
        <select class="input-type" name="speakerType" id="speakerType" required oninvalid="this.setCustomValidity('Obavezan tip zvučnika')">
            <option value="" disabled selected hidden>Tip zvučnika</option>
            <option value="speakerBundle">Komplet razglasa</option>
            <option value="activeSpeaker">Aktivni zvučnik</option>
            <option value="passiveSpeaker">Pasivni zvučnik</option>
            <option value="monitorSpeaker">Monitorski zvučnik</option>
        </select><br>
        <input type="text" name="drivers" maxlength="100" id="drivers" placeholder="Driveri" required oninvalid="this.setCustomValidity('Obavezno polje')"><br>
        <div class="three-inputs">
            <div class="input-div-three"><input maxlength="4" type="number" name="RMS" id="RMS" placeholder="RMS (W)" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
            <div class="input-div-three"><input maxlength="4" type="number" name="maxPower" id="maxPower" placeholder="Maksimalna snaga (W)" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
            <div class="input-div-three"><input maxlength="4" type="number" name="soundPressure" id="soundPressure" placeholder="Maksimalna glasnoća (dB)" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
        </div>
        <div class="two-inputs">
            <div class="input-div-two"><input maxlength="3" type="number" name="minFrequency" id="minFrequency" placeholder="Minimalna frekvencija" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
            <div class="input-div-two"><input maxlength="5" type="number" name="maxFrequency" id="maxFrequency" placeholder="Maksimalna frekvencija" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
        </div>
        <div class="two-inputs">
            <div class="input-div-two"><input type="text" maxlength="24" name="dimensions" id="dimensions" placeholder="Dimenzije (mm)" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
            <div class="input-div-two"><input type="number" maxlength="6" name="weight" id="weight" step="0.1" placeholder="Težina (kg)" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
        </div>
        <textarea name="description" id="description" maxlength="800" placeholder="Opis proizvoda (neobavezno)"></textarea>
        <input type="text" name="imageURL" id="imageURL" maxlength="200" placeholder="URL fotografije" required oninvalid="this.setCustomValidity('Obavezna fotografija proizvoda')"><br>
        <div id="extra-inputs"></div>
        <div id="add-extra-inputs">
            <p>Za dodavanje do 3 dodatne informacije o proizvodu, pritisnite '+' ikonu ispod.</p>
            <img src="images/addIcon.png">
        </div><br id="break-line" style="display: none;">
        <div class="form-buttons">
            <div class="input-div-two"><input type="submit" name="submit" value="Dodaj proizvod"></div>
            <div class="input-div-two"><input type="reset" value="Očisti podatke"></div>
        </div>
    </form>
</section>
<script type="text/javascript" src="js/addextrainputs.js"></script>