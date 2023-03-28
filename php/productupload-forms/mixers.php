<section class="newproduct-form">
    <div class="section-wrapper">
        <form method="POST" action="../newproduct-process.php" accept-charset="UTF-8">
            <input type="text" name="name" id="name" placeholder="Naziv proizvoda"><br>
            <input type="text" name="manufacturer" id="manufacturer" placeholder="Proizvođač"><br>
            <div class="two-inputs">
                <div class="input-div-two"><input type="number" name="price" id="price" placeholder="Cijena"><br></div>
                <div class="input-div-two"><input type="number" name="quantity" id="quantity" placeholder="Količina"><br></div>
            </div>
            <div class="three-inputs">
            <div class="input-div-three"><input type="number" name="faders" id="faders" placeholder="Broj potenciometara"><br></div>
            <div class="input-div-three"><input type="number" name="inputs" id="inputs" placeholder="Broj ulaza"><br></div>
            <div class="input-div-three"><input type="number" name="outputs" id="outputs" placeholder="Broj izlaza"><br></div>
            </div>
            <div class="two-inputs">
                <div class="input-div-two"><input type="text" name="dimensions" id="dimensions" placeholder="Dimenzije (mm)"><br></div>
                <div class="input-div-two"><input type="number" name="weight" id="weight" placeholder="Težina (kg)"><br></div>
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