<section class="newproduct-form">
    <form method="POST" action="php/newproduct-process.php" accept-charset="UTF-8">
        <input type="hidden" name="category" id="category" value="accessories">
        <input type="text" name="name" id="name" placeholder="Naziv proizvoda" required oninvalid="this.setCustomValidity('Obavezan naziv proizvoda')"><br>
        <input type="text" name="manufacturer" id="manufacturer" placeholder="Proizvođač" required oninvalid="this.setCustomValidity('Obavezan naziv proizvođača')"><br>
        <div class="two-inputs">
            <div class="input-div-two"><input type="number" name="price" id="price" step="0.01" placeholder="Cijena (€)" required oninvalid="this.setCustomValidity('Obavezna cijena proizvoda')"><br></div>
            <div class="input-div-two"><input type="number" name="quantity" id="quantity" placeholder="Količina" required oninvalid="this.setCustomValidity('Obavezna količina na stanju')"><br></div>
        </div>
        <select class="input-type" name="accessoryType" id="accessoryType" required oninvalid="this.setCustomValidity('Obavezno odabrati vrstu')">
            <option value="" disabled selected hidden>Vrsta dodatne opreme</option>
            <option value="stands">Stalci</option>
            <option value="headphones">Slušalice</option>
            <option value="storageUnits">Prostor za pohranu</option>
            <option value="other">Ostalo</option>
        </select><br>
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