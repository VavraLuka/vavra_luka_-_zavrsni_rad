<section class="newproduct-form">
    <form method="POST" action="php/newproduct-process.php" accept-charset="UTF-8">
        <input type="hidden" name="category" id="category" value="amplifiers">
        <input type="text" name="name" id="name" placeholder="Naziv proizvoda" required oninvalid="this.setCustomValidity('Obavezan naziv proizvoda')"><br>
        <input type="text" name="manufacturer" id="manufacturer" placeholder="Proizvođač" required oninvalid="this.setCustomValidity('Obavezan naziv proizvođača')"><br>
        <div class="two-inputs">
            <div class="input-div-two"><input type="number" name="price" id="price" step="0.01" placeholder="Cijena" required oninvalid="this.setCustomValidity('Obavezna cijena proizvoda')"><br></div>
            <div class="input-div-two"><input type="number" name="quantity" id="quantity" placeholder="Količina" required oninvalid="this.setCustomValidity('Obavezna količina na stanju')"><br></div>
        </div>
        <div class="three-inputs">
            <div class="input-div-three"><select class="input-type" name="limiter" id="limiter" required oninvalid="this.setCustomValidity('Obavezno polje')">
                    <option value="" disabled selected hidden>Sadrži limiter</option>
                    <option value="Da">Da</option>
                    <option value="Ne">Ne</option>
                </select><br></div>
            <div class="input-div-three"><input type="number" name="channels" id="channels" placeholder="Broj kanala" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
            <div class="input-div-three"><input type="number" name="power" id="power" placeholder="Snaga (W)" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
        </div>
        <div class="two-inputs">
            <div class="input-div-two"><input type="number" name="minFrequency" id="minFrequency" placeholder="Minimalna frekvencija" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
            <div class="input-div-two"><input type="number" name="maxFrequency" id="maxFrequency" placeholder="Maksimalna frekvencija" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
        </div>
        <div class="two-inputs">
            <div class="input-div-two"><input type="text" name="dimensions" id="dimensions" placeholder="Dimenzije (mm)" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
            <div class="input-div-two"><input type="number" name="weight" id="weight" step="0.1" placeholder="Težina (kg)" required oninvalid="this.setCustomValidity('Obavezno polje')"><br></div>
        </div>
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