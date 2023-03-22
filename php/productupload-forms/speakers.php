<section class="newproduct-form">
    <div class="section-wrapper">
        <form method="POST" action="../newproduct-process.php" accept-charset="UTF-8">
            <input type="text" name="name" id="name" placeholder="Naziv proizvoda"><br>
            <input type="text" name="manufacturer" id="manufacturer" placeholder="Proizvođač"><br>
            <div class="two-inputs">
                <div class="input-div-two"><input type="number" name="price" id="price" placeholder="Cijena"><br></div>
                <div class="input-div-two"><input type="number" name="quantity" id="quantity" placeholder="Količina"><br></div>
            </div>
            <select class="input-type" name="speakerType" id="speakerType">
                <option value="" disabled selected hidden>Tip zvučnika</option>
                <option value="Hrvatska">Komplet razglasa</option>
                <option value="BiH">Aktivni zvučnik</option>
                <option value="Srbija">Pasivni zvučnik</option>
                <option value="Mađarska">Monitorski zvučnik</option>
            </select><br>
            <input type="text" name="drivers" id="drivers" placeholder="Driveri"><br>
            <div class="three-inputs">
                <div class="input-div-three"><input type="number" name="RMS" id="RMS" placeholder="RMS"><br></div>
                <div class="input-div-three"><input type="number" name="maxPower" id="maxPower" placeholder="Maksimalna snaga"><br></div>
                <div class="input-div-three"><input type="number" name="soundPressure" id="soundPressure" placeholder="Maksimalna glasnoća"><br></div>
            </div>
            <div class="two-inputs">
                <div class="input-div-two"><input type="number" name="minFrequency" id="minFrequency" placeholder="Minimalna frekvencija"><br></div>
                <div class="input-div-two"><input type="number" name="maxFrequency" id="maxFrequency" placeholder="Maksimalna frekvencija"><br></div>
            </div>
            <div class="two-inputs">
                <div class="input-div-two"><input type="text" name="dimensions" id="dimensions" placeholder="Dimenzije (mm)"><br></div>
                <div class="input-div-two"><input type="number" name="weight" id="weight" placeholder="Težina (kg)"><br></div>
            </div>
            <input type="text" name="imageURL" id="imageURL" placeholder="URL fotografije"><br>
            <div class="form-buttons">
                <div class="input-div-two"><input type="submit" name="submit" value="Registracija"></div>
                <div class="input-div-two"><input type="reset" value="Očisti podatke"></div>
            </div>
        </form>
        </form>
    </div>
</section>