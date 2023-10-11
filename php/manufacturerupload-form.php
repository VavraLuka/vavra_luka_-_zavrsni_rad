<section class="newproduct-form">
    <form method="POST" action="php/newmanufacturer-process.php" accept-charset="UTF-8" autocomplete="off">
        <input type="text" name="manufacturer" maxlength="60" id="manufacturer" placeholder="Naziv proizvođača" required oninvalid="this.setCustomValidity('Obavezan naziv proizvođača')"><br>
        <textarea name="description" id="description" maxlength="1200" placeholder="Opis proizvođača" required oninvalid="this.setCustomValidity('Obavezan opis proizvođača')"></textarea><br>
        <div class="form-buttons">
            <div class="input-div-two"><input type="submit" name="submit" value="Dodaj proizvođača"></div>
            <div class="input-div-two"><input type="reset" value="Očisti podatke"></div>
        </div>
    </form>
</section>
<script type="text/javascript" src="js/addextrainputs.js"></script>