<section class="newproduct-form">
    <form method="POST" action="php/newproduct-process.php" accept-charset="UTF-8" autocomplete="off">
        <input type="hidden" name="category" id="category" value="light">
        <input type="text" name="name" maxlength="60" id="name" placeholder="Naziv proizvoda" required oninvalid="this.setCustomValidity('Obavezan naziv proizvoda')"><br>
        <input type="text" name="manufacturer" maxlength="30" id="manufacturer" placeholder="Proizvođač" required oninvalid="this.setCustomValidity('Obavezan naziv proizvođača')"><br>
        <div class="two-inputs">
            <div class="input-div-two"><input type="number" maxlength="14" name="price" id="price" step="0.01" placeholder="Cijena (€)" required oninvalid="this.setCustomValidity('Obavezna cijena proizvoda')"><br></div>
            <div class="input-div-two"><input type="number" maxlength="4" name="quantity" id="quantity" placeholder="Količina na stanju" required oninvalid="this.setCustomValidity('Obavezna količina na stanju')"><br></div>
        </div>
        <input type="text" name="lightSource" id="lightSource" maxlength="60" placeholder="Izvor svjetla" required oninvalid="this.setCustomValidity('Obavezno polje')"><br>
        <select class="input-type" name="lightType" id="lightType" required oninvalid="this.setCustomValidity('Obavezno polje')">
            <option value="" disabled selected hidden>Tip rasvjete</option>
            <option value="movingHeadSpot">Moving Head - Spot</option>
            <option value="movingHeadBeam">Moving Head - Beam</option>
            <option value="movingHeadWash">Moving Head - Wash</option>
            <option value="LEDPar">LED Par</option>
        </select><br>
        <div class="two-inputs">
            <div class="input-div-two"><input type="number" maxlength="10" name="beamAngle" id="beamAngle" placeholder="Kut svjetlosnog snopa (°)" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
            <div class="input-div-two"><input type="number" maxlength="5" name="powerConsumption" id="powerConsumption" placeholder="Potrošnja energije (W)" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
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