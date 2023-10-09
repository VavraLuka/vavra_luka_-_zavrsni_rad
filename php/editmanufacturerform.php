<section class="newproduct-form">
    <form method="POST" action="php/editmanufacturer-process.php" accept-charset="UTF-8" autocomplete="off">
        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
        <label for="manufacturer">Naziv proizvođača</label><input type="text" name="manufacturer" maxlength="60" id="manufacturer" placeholder="Naziv proizvođača" required oninvalid="this.setCustomValidity('Obavezan naziv proizvođača')" value="<?php echo $manufacturer; ?>"><br>
        <label for="description">Opis proizvođača</label><textarea name="description" id="description" maxlength="1200" required oninvalid="this.setCustomValidity('Obavezan opis proizvođača')"><?php echo $description; ?></textarea>
        <label for="imageURL">URL fotografije</label><input type="text" name="imageURL" id="imageURL" maxlength="160" placeholder="URL fotografije" required oninvalid="this.setCustomValidity('Obavezan vizualni identitet proizvođača')" value="<?php echo $imageURL; ?>"><br>
        <div class="form-buttons">
            <div class="input-div-two"><input type="submit" name="submit" value="Ažurirajte podatke"></div>
            <div class="input-div-two"><input type="reset" value="Resetiraj podatke"></div>
        </div>
    </form>
    <form action="php/deleterow-process.php" method="POST" onsubmit="return confirmSubmit();" style="width: 49%; float: right;">
        <input type="number" name="manufacturerId" id="manufacturerId" value="<?php echo $id; ?>" hidden>
        <input style="background-color: red; border: 2px solid red;" type="submit" name="submit" value="Obrišite proizvođača" onclick="deleteProduct()">
    </form>
    <script>
        function confirmSubmit() {
            var confirmed = confirm("Jeste li sigurni da želite ukloniti ovog proizvođača? Proizvodi će i dalje biti vidljivi korisnicima.");
            if (confirmed) {
                confirmed = confirm("Potvrdite brisanje proizvođača.");
                return confirmed;
            }
            return false;
        }
    </script>
</section>