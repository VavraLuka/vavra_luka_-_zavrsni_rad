<section class="newproduct-form">
    <form method="POST" action="php/newproduct-process.php" accept-charset="UTF-8" autocomplete="off">
        <input type="hidden" name="category" id="category" value="mixers">
        <input type="text" name="name" maxlength="60" id="name" placeholder="Naziv proizvoda" required oninvalid="this.setCustomValidity('Obavezan naziv proizvoda')"><br>
        <input type="text" name="manufacturer" maxlength="30" id="manufacturer" placeholder="Proizvođač" required oninvalid="this.setCustomValidity('Obavezan naziv proizvođača')"><br>
        <div class="two-inputs">
            <div class="input-div-two"><input type="number" maxlength="14" name="price" id="price" step="0.01" placeholder="Cijena (€)" required oninvalid="this.setCustomValidity('Obavezna cijena proizvoda')"><br></div>
            <div class="input-div-two"><input type="number" maxlength="4" name="quantity" id="quantity" placeholder="Količina na stanju" required oninvalid="this.setCustomValidity('Obavezna količina na stanju')"><br></div>
        </div>
        <div class="three-inputs">
            <div class="input-div-three"><input type="number" name="faders" maxlength="3" id="faders" placeholder="Broj potenciometara" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
            <div class="input-div-three"><input type="number" name="inputs" maxlength="3" id="inputs" placeholder="Broj ulaza" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
            <div class="input-div-three"><input type="number" name="outputs" maxlength="3" id="outputs" placeholder="Broj izlaza" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
        </div>
        <div class="two-inputs">
            <div class="input-div-two"><input type="text" name="dimensions" maxlength="24" id="dimensions" placeholder="Dimenzije (mm)" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
            <div class="input-div-two"><input type="number" name="weight" maxlength="6" id="weight" step="0.1" placeholder="Težina (kg)" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
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