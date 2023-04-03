<section class="newproduct-form">
    <div class="section-wrapper">
        <form method="POST" action="../newproduct-process.php" accept-charset="UTF-8">
            <input type="hidden" name="category" id="category" value="amplifiers">
            <input type="text" name="name" id="name" placeholder="Naziv proizvoda"><br>
            <input type="text" name="manufacturer" id="manufacturer" placeholder="Proizvođač"><br>
            <div class="two-inputs">
                <div class="input-div-two"><input type="number" name="price" id="price" placeholder="Cijena"><br></div>
                <div class="input-div-two"><input type="number" name="quantity" id="quantity" placeholder="Količina"><br></div>
            </div>
            <div class="three-inputs">
                <div class="input-div-three"><select class="input-type" name="limiter" id="limiter">
                        <option value="" disabled selected hidden>Sadrži limiter</option>
                        <option value="Da">Da</option>
                        <option value="Ne">Ne</option>
                    </select><br></div>
                <div class="input-div-three"><input type="number" name="channels" id="channels" placeholder="Broj kanala"><br></div>
                <div class="input-div-three"><input type="number" name="power" id="power" placeholder="Snaga (W)"><br></div>
            </div>
            <div class="two-inputs">
                <div class="input-div-two"><input type="number" name="minFrequency" id="minFrequency" placeholder="Minimalna frekvencija"><br></div>
                <div class="input-div-two"><input type="number" name="maxFrequency" id="maxFrequency" placeholder="Maksimalna frekvencija"><br></div>
            </div>
            <div class="two-inputs">
                <div class="input-div-two"><input type="text" name="dimensions" id="dimensions" placeholder="Dimenzije (mm)"><br></div>
                <div class="input-div-two"><input type="number" name="weight" id="weight" step="0.1" placeholder="Težina (kg)"><br></div>
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